<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="form-group">
                <div v-if="!authorized">
                    <input class="form-control" placeholder="enter device public key" :type="passwordFieldType" v-model="public_key" />

                    <br>

                    <input class="form-control" placeholder="enter device private key" :type="passwordFieldType" v-model="private_key"/>

                    <br>

                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="password" @click="switchVisibility">
                        show / hide
                    </button>

                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" @click="socketConnect">Connect</button>
                </div>
                <div v-else>
                    Device <b><mark>{{ device_id }}</mark></b> is connected now :)
                    <br>
                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" @click="logout">logout</button>

                </div>
            </div>
        </div>
    </div>
    <hr/>
     <div v-if="authorized">
        <div class="row">
            <div class="col-md-8">
                <table class="leading-normal socket_table">
                        <thead>
                            <tr>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Payload
                                </th>
                                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created At
                                </th>
                            </tr>
                        </thead>
                        <tbody id="device_data">
                            <tr v-for="(data) in socket_data.slice().reverse()" :key="data.id">
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                    <tree-view :data="data.payload" :options="{maxDepth: 10}"></tree-view>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                    <time-ago
                                        :datetime="data.created_at"
                                        :refresh="1"
                                        :tooltip="true"
                                        :long="false"
                                    />
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</template>
<style >
    .socket_table{
        max-height: 440px;
        overflow: auto;
        display: inline-block;
    }
</style>
<script>
import Vue from "vue";
import TimeAgo from "vue2-timeago";
import TreeView from "vue-json-tree-view";
import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
Vue.use(Toast, {
    transition: "Vue-Toastification__bounce",
    maxToasts: 30,
    newestOnTop: true,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 0.6,
    showCloseButtonOnHover: true,
    hideProgressBar: true,
    closeButton: "button",
    icon: true,
    rtl: false,
    position: "bottom-right",
    timeout: 3048,
});
Vue.use(TreeView)
import Echo from "laravel-echo";
window.Pusher = require("pusher-js");

function initialState (){
  return {
        location: null,
        lineCoordinates: [],
        socket_data: [],
        device_token: null,
        device_id: null,
        authorized: false,
        public_key: "",
        private_key: "",
        passwordFieldType: 'password',
    }
}

export default {
    components: {
    TimeAgo
    },
    data() {
        return initialState();
    },
    computed: {
        socket_data: function() {
            return this.items.sort((a, b) => new Date(a.created_at) - new Date(b.created_at))
        },
    },
    methods: {
        socketConnect: function () {
            this.authorize();
        },
        logout :  function(){
            localECHO.leave(`App.Car.${this.device_id}`);
             axios({
                    method: "POST",
                    url: "/iot/v1/logout",
                    headers: {
                        Authorization: `Bearer ${this.device_token}`,
                    }
                })
                .then((response) => {
                    Object.assign(this.$data, initialState());
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        switchVisibility() {
            this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password'
        },
        clearSocketData: function () {
            this.socket_data = [];
        },
        msg: function (type = 'success', message) {
            Swal.fire({
                position: 'top-end',
                icon: type,
                showConfirmButton: false,
                timer: 1500,
                text: message
            })
        },
        notify : function(msg){
            this.$toast.success(msg, {
            });
        },
        error : function(msg){
            this.$toast.error(msg, {
            });
        },
        warning : function(msg){
            this.$toast.warning(msg, {
            });
        },
        authorize: function () {
            axios.get('/sanctum/csrf-cookie').then(response => {
                axios
                    .post("/iot/v1/login", {
                        public_key: this.public_key,
                        private_key: this.private_key,
                    } , {withCredentials: true})
                    .then(({
                        data
                    }) => {
                        this.device_token = data.token;
                        this.device_id = data.device_id;
                        window.localECHO = new Echo({
                            broadcaster: "pusher",
                            key: process.env.MIX_PUSHER_APP_KEY,
                            cluster: process.env.MIX_PUSHER_APP_CLUSTER,
                            forceTLS: false,
                            wsHost: window.location.hostname,
                            wsPort: 6001,
                            disableStats: true,
                            enabledTransports: ['ws', 'wss'], // <- added this param
                            authorizer: (channel, options) => {
                                console.log(options, channel);
                                return {
                                    authorize: (socketId, callback) => {
                                        axios({
                                                method: "POST",
                                                url: "/api/broadcasting/auth",
                                                headers: {
                                                    Authorization: `Bearer ${this.device_token}`,
                                                },
                                                data: {
                                                    socket_id: socketId,
                                                    channel_name: channel.name,
                                                },
                                            })
                                            .then((response) => {
                                                console.log(response);
                                                this.msg("success", "Connected")
                                                this.authorized = true;
                                                callback(false, response.data);
                                            })
                                            .catch((error) => {
                                                console.log(error);
                                                this.authorized = false;
                                                this.msg("error", "Failed To Connect")
                                                callback(true, error);
                                            });
                                    },
                                };
                            },
                        });
                        localECHO.private(`App.Car.${this.device_id}`).notification((notification) => {
                            console.log(notification);
                        });
                        localECHO.private(`App.Car.${this.device_id}`)
                            .listen(
                                ".send_location_event",
                                (e) => {
                                    console.log(e)
                                    this.socket_data.push(e);
                                    this.handelResposne(e)
                                }
                            );
                    }).catch((error) => {
                        this.msg("error", "Failed To Connect")
                    });
            });
        },
        handelResposne : function(e){
            this.handelLoction(e)
        },
        handelLoction : function(data){
            if(this.socketPayloadContainsKey(data.payload , "lat") && this.socketPayloadContainsKey(data.payload , "lng")){
                this.location = [data.payload.lat , data.payload.lng];
                //this.updateMap()
            }
        },
        socketPayloadContainsKey(payload,key) {
            return Object.keys(payload).includes(key);
        }
    },
    mounted() {
        //
    },
    created() {
        //
    },
};
</script>
