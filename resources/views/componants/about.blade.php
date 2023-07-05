<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline" id="about-title"></span></h2>
                   
                    <p class="text-muted" id="about-details"></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a id="twiterLinks" href=" " >sd</a>
                        <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                        <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

SocialData()

async function SocialData(){

             try{
                 let url='/socialData'
                 let response=await axios.get(url)
                 let link=response.data['twitterLink']
                 document.getElementById['twiterLinks'].setAttribute('href',link)



             }catch(error){

                 alert(error)
             }



 }


        AboutData()
        async function AboutData(){

            try{

                let url='/aboutData'
                let response=await axios.get(url)
                document.getElementById('about-title').innerHTML=response.data['title']
                document.getElementById('about-details').innerHTML=response.data['details']


            }catch(error){
                alert(error)
            }
        }



       

</script>