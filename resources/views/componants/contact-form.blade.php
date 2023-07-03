  <!-- Page content-->
  <section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Get in touch</h1>
                <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">

                    <form id="contactForm">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."/>
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"/>
                            <label for="phone">Phone number</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                            <label for="message">Message</label>
                        </div>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    let element=document.getElementById('contactForm');

    element.addEventListener('submit',async(event)=>{
        event.preventDefault();//eta use korar karon holo browser without loading a data insert hobe mot ktha loading nibe na refresh dile
        let name=document.getElementById('name').value;
        // alert(name);
        let email =document.getElementById('email').value;
        let phone=document.getElementById('phone').value;
        let message=document.getElementById('message').value;

        if(name.length===0){
            alert("Name is required");
        } else if(email.length===0){
            alert("Email is required");
        }else if(phone.length===0){
            alert("Phone is required");
        }else{

            let formData ={
                fullName: name,
                email:email,
                phone:phone,
                message:message
            }

            let url="/contactRequest";
            // await use korle async function er smne use korte hobe await use korar krn holo jtokkhn kaj 
            // complete na hobe to kkhon okne wait korbe..dada post bna hoya projonto

            // loader show
            document.getElementById('loading-div').classList.remove('d-none');
            // content hide
            document.getElementById('content-div').classList.add('d-none');
            // ekane ajax call kore
            let result=await axios.post(url,formData);
            // ajax request complate hober por loder k hide kore dibo a content k show kore dibo
            // loder hide 
            document.getElementById('loading-div').classList.add('d-none');
            // contnet show
            document.getElementById('content-div').classList.remove('d-none');

            if(result.status===200 && result.data===1){

                alert("Data insert Successfully");
                element.reset();
            }else{
                alert("something went wrong");
            }

        }
    })


</script>


