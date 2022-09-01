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
            axios.get(`http://localhost/php-ajax-dischi/api/discs?genre=${this.genre}`).then(res => {
                this.discs = res.data;
            })
        },
    },
    created() {
        this.fetchDiscs();
    }
});