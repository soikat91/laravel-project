<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Experience</h2>
                    <a target="_blank" class="btn btn-primary px-4 py-3" id="CvLink"href=" ">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <!-- Experience Card 1-->
                <div id="experience">

                </div>

             

            </section>
          
         
        </div>
    </div>
</div>

<script>

    // resume download

    DownloadLink()
    async function DownloadLink() {

        try{
            let url="/resumeLink";
            let response=await axios.get(url);
            let link=response.data['downloadLink']
            document.getElementById('CvLink').setAttribute('href',link);
        }catch(error){
            alert(error)
        }
        
    }


    ExperienceList()
    async function ExperienceList(){

        try{

            let url='/experiencesData'
            let response=await axios.get(url)
            response.data.forEach((item)=>{
                document.getElementById('experience').innerHTML +=(`
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">${item['duration']}</div>
                                    <div class="small fw-bolder">${item['title']}</div>
                                    <div class="small text-muted">${item['designation']}</div>
                                
                                </div>
                            </div>
                            <div class="col-lg-8"><div>${item['details']}</div></div>
                        </div>
                    </div>
                </div>
                
                `)
            })


        }catch(error){
            alert(error)
        }
    }
</script>