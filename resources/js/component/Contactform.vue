<template>
      <div class="container">
        <div class="container">
            <form @submit="sendMessage" class="was-validated">
                <div class="form-group">
                    <label for="uname">Username:</label>
                    <!-- <input @keyup="buttonText = name" v-model="name" type="text" class="form-control | @error('uname') is-invalid @enderror" id="uname" placeholder="Enter username" name="uname"> -->
                    <input v-model="name" type="text" class="form-control | @error('uname') is-invalid @enderror" id="uname" placeholder="Enter username" name="uname">
                    
                </div>
                <div class="form-group">
                    <label for="email">E mail:</label>
                    <input v-model="email" type="email" class="form-control | @error('email') is-invalid @enderror" id="email" placeholder="Enter E mail" name="email">
                </div>
                <div class="form-group">
                    <label for="messages">Message:</label>
                    <textarea v-model="messages" class="form-control | @error('messages') is-invalid @enderror" name="messages" id="messages" cols="30" rows="10" placeholder="Enter your messages!"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

                <!-- <div @click="buttonText = name" class="btn btn-primary"> {{ buttonText }}</div> -->
            </form>
        </div>
      </div>
</template>

<script>
export default {
    data(){
        return{
            loaded: false,
            name: null,
            email: null,
            messages: null,
            buttonText: "Text ini akan berubah jika anda ketik nama"
        }
    },
    methods:{
       sendMessage(e){
           e.preventDefault();
           
           const self = this;

           Vue.axios.post('/contact-us/sendmessages/ajax', {
               name: self.name,
               email: self.email,
               messages: self.messages
           })
           .then(response=>{
               alert('Thankyou, the messages has been sent!');
           })
           .catch(error=> {
               alert('Failed');
               console.log(error);
           })

       } 
    }
}
</script>