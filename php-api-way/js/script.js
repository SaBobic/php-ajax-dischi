Vue.config.devtools = true;

const app = new Vue({
    el: '#app',
    name: 'App',
    data: {
        discs: [],
        genre: '',
    },
    methods: {
        fetchDiscs() {
            axios.get(`../api/discs?genre=${this.genre}`).then(res => {
                this.discs = res.data;
            })
        },
    },
    created() {
        this.fetchDiscs();
    }
});