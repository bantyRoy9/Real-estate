    @extends('layouts.main')
    @push('title')
    <title>Home</title>
    @endpush()
    @section('main-section')
    <section class="banner-section">
        <div class="section-container">
            <div class="bannerContainer">
                <div class="banner-title-heading">
                    <h4>Lorem, ipsum, or lipsum as it is somtimes known, is </h4>
                    <p>It is a long established fact that a reader will be distcted by the readable content of a page when lookin at its layout</p>
                    <button>
                        Learn Mode
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section-container">
        <div class="row p-2 align-items-center">
            <div class="col-md-3">
                <div class="align-items-center text-center" style="margin-top: -100px;">
                    <img src="{{ asset('assests/images/testimonials/003.png')}}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-9">
                <div class="row gap-5">
                <div class="p-5"><h2>What Do Our Wearers Say ?</h2></div>
                <div class="text-start" style="margin-left: 30px;"><p>Lorem Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae natus nihil fuga temporibus possimus quia debitis sapiente tempora, accusamus inventore! Quam aut quidem iste eius velit laudantium aspernatur doloribus error. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et nostrum id sint eos cum voluptates accusantium quidem libero repellat, nobis minus ut hic doloribus? Voluptatem minima eum repudiandae nemo tempora. ipsum dolor sit amet consectetur adipisicing elit. Pariatur earum mollitia, repellat reprehenderit laudantium sunt facilis qui sit quo, sapiente corrupti? Reprehenderit eum alias aliquam in perspiciatis ipsa natus est.</p></div>
                <div class="m-4 mt-5 mb-5 testinomalImagesList">
                    <div class="testinomalImages"></div>
                    <div class="testinomalImages"></div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="profileSections">
            <div class="profileSection">    </div>
            <div class="profileSection1"></div>
        </div>
    </section>
    <section style="position: relative;">
        <div class="productBanner">
            <div class="productBannerContent">
                <div class="productBannerTitle">
                    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperia nam eveniet itam, ipsa ad vitae vur enim.</h4>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro nam eveniet itaque, molestias optio esse praesentium! Eligendi, non animi voluptatem atque sapiente, obcaecati ex, a modi iste ut est enim?</p>
                    <h3>Wide range of product</h3>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="productSection"></div>
    </section>
    @endsection()