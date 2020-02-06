<template>
    <div>
         <form @submit.prevent="send()">

             <h1>Puglia Ice Cream</h1>
             <h4>Choose Your Ice Cream Flavour From Puglia</h4>
            <div class="form-group">
                <label for="sendblueberry">
                    <input type="checkbox"
                        id="sendblueberry"
                        value="Blueberry"
                        v-model="checkedOptions">Blueberry Flavour
                </label>
                <br>
                <label for="sendCookies">
                    <input type="checkbox"
                        id="sendcookies"
                        value="Cookies and Cream"
                        v-model="checkedOptions">Cookies and Cream Flavour
                </label>
                 <br>
                <label for="sendVanilla">
                    <input type="checkbox"
                        id="sendvanilla"
                        value="Vanilla"
                        v-model="checkedOptions">Vanilla Flavour
                </label>

                <br>
                <label for="sendPecan">
                    <input type="checkbox"
                        id="sendpecan"
                        value="Pecan"
                        v-model="checkedOptions">Pecan Flavour
                </label>
            </div>
            
         
            <br><br>
            
                <h4>Would you like a Biscuit with that ?</h4>

                <input type="radio" id="one" value="0" v-model="picked">
                <label for="one">Without Biscuit</label>
                <br>
                <input type="radio" id="two" value="1" v-model="picked">
                <label for="two">With Biscuit</label>
                <br><br>
                
            
            <h4>What Cone would you like with that ?</h4>
            <div class="form-group">
                <label for="cone">Cone</label>
                    <select id="cone"
                            class="form-control"
                            v-model="selectedCone">
                        <option v-for="cone in cones">{{ cone }}</option>
                    </select>
            </div>


            <div class="form-group">
                <label for="message">Review Us</label>
                <textarea id="message"
                        rows="5"
                        class="form-control"
                        v-model="message"></textarea>
           </div>

            <div class="form-group">
                <button class="btn btn-info">Submit</button>
            </div>
        </form>       
    </div>
</template>


<script>
    export default {
        

        data() {
                
            return {
                message: '',
                checkedOptions: [],
                picked: '',
                selectedCone: '',
                cones: ['Chocolate', 'Plain', 'Waffle']
            }
        },
        methods: {
            send() {
                let obj = {
                    flavour: this.checkedOptions,
                    biscuit_type: this.picked,
                    cone_type: this.selectedCone,
                    review: this.message
                }
                axios.post('/api/checks', obj)
                    .then(res => console.log(res.data));
            }
    }
    }
</script>
