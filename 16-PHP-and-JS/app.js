const app = new Vue({
    el: '#app',
    data:{
        group_name:'',
        added: []
    },
    methods:{
        add(){
            const formData = new FormData();

            formData.append('groupname',this.group_name);

            axios.post('01-server.php?operation=addgroup', formData)
                .then(res => {
                    console.log(res)
                    this.added.push({
                        id: res.data.data.id,
                        name: res.data.data.name
                    })
                    this.group_name = '';

                })
                .catch(err => console.log(err))

        }

    }

})