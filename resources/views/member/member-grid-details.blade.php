@extends('member.layouts.default')
@section('content')
<div class="content-wrapper">

    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Revenue, Hit Rate & Deals -->
        <div class="row my-3">
            <div class="col-8">
                <h1>Georgia&apos;s Ibiza Grid</h1>
                <h3>View and share your grid.</h3>
            </div>
            <div class="col-4 quick-link text-right">
                <span class="mr-5"><a hrf="">Quick Link</a></span>
                <div class="row justify-content-end my-2">
                    <a href="" class="mx-1"><img src="{{ asset('member/app-assets/images/icons/Chat.svg') }}" alt=""></a>
                    <a href="" class="mx-1"><img src="{{ asset('member/app-assets/images/icons/File Invoice.svg') }}" alt=""></a>
                    <a href="" class="mx-1"><img src="{{ asset('member/app-assets/images/icons/Gear.svg') }}" alt=""></a>

                </div>

            </div>
        </div>
        <!-------------------- fulfil souring request--------->
        <div id="client-create-grid" class="mt-5 border-0">
            <div class="row">
                <div class="col-11">
                    <div class="client-grid-bg-1  mt-3 px-4 py-2">
                        <h1>STYLEGRID</h1>
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h4>Georgia&apos;s Ibiza Grid</h>

                            </div>
                            <div class="col-6">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row ">
                <div class="col-11">
                    <div class="new-grid-bg px-3 py-3">
                        <div class="row">
                            <div class="col-8">
                                <h1 style="color:#000 ;">STYLEGRID</h1>
                            </div>

                        </div>
                        <div class="row add-item">
                            <div class="col-lg-6 text-lg-center text-right">
                                <div class="row p-3">
                                    <div class="col-5">
                                        <div class="parent">
                                            <img src="{{ asset('member/app-assets/images/gallery/client-ful-1.png') }}"
                                                class="img-fluid parent-1" alt="">
                                            <div class="row parent1">
                                                <div class="col ">
                                                    <button data-toggle="modal" data-target="#exampleModal-1"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                            class="img-fluid  child1" alt="">
                                                    </button>
                                                </div>
                                                <div class="col pl-0">
                                                    <button data-toggle="modal" data-target="#exampleModal"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                            class="img-fluid child" alt="">
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="parent mt-2">
                                            <img src="{{ asset('member/app-assets/images/gallery/client-ful-3.png') }}"
                                                class="img-fluid parent-1" alt="">
                                            <div class="row parent1">
                                                <div class="col ">
                                                    <button data-toggle="modal" data-target="#exampleModal-1"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                            class="img-fluid  child1" alt="">
                                                    </button>
                                                </div>
                                                <div class="col pl-0">
                                                    <button data-toggle="modal" data-target="#exampleModal"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                            class="img-fluid child" alt="">
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="parent">
                                            <img src="{{ asset('member/app-assets/images/gallery/client-ful-2.png') }}"
                                                class="img-fluid parent-1" alt="">
                                            <div class="row parent1">
                                                <div class="col ">
                                                    <button data-toggle="modal" data-target="#exampleModal-1"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                            class="img-fluid  child1" alt="">
                                                    </button>
                                                </div>
                                                <div class="col pl-0">
                                                    <button data-toggle="modal" data-target="#exampleModal"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                            class="img-fluid child" alt="">
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="parent mt-2">
                                            <img src="{{ asset('member/app-assets/images/gallery/client-ful-4.png') }}"
                                                class="img-fluid parent-1" alt="">
                                            <div class="row parent1">
                                                <div class="col ">
                                                    <button data-toggle="modal" data-target="#exampleModal-1"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                            class="img-fluid  child1" alt="">
                                                    </button>
                                                </div>
                                                <div class="col pl-0">
                                                    <button data-toggle="modal" data-target="#exampleModal"
                                                        class="">
                                                        <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                            class="img-fluid child" alt="">
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 px-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 px-5 text-center">
                                <img src="{{ asset('member/app-assets/images/gallery/client-ful-5.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1 my-auto ">
                    <a href="">
                        <div class="blue-bg mt-2">1</div>
                    </a>
                    <a href="">
                        <div class="gradiant-bg text-center mt-1"><span>2</span></div>
                    </a>
                    <a href="">
                        <div class="gradiant-bg text-center mt-1"><span>3</span></div>
                    </a>
                    <a href="">
                        <div class="gradiant-bg text-center mt-1"><span><img
                                    src="{{ asset('member/app-assets/images/icons/plus.png') }}" class="img-fluid" alt="">
                            </span>
                    </a>
                </div>
            </div>

        </div>
        <div class="row ">
            <div class="col-11">
                <div class="new-grid-bg  px-3 py-3">
                    <div class="row">
                        <div class="col-8">
                            <h1 style="color:#000 ;">STYLEGRID</h1>
                        </div>

                    </div>
                    <div class="row add-item">
                        <div class="col-lg-6  text-lg-center text-right">
                            <div class="row p-3">
                                <div class="col-5">
                                    <div class="parent">
                                        <img src="{{ asset('member/app-assets/images/gallery/client-ful-6.png') }}"
                                            class="img-fluid parent-1" alt="">
                                        <div class="row parent1">
                                            <div class="col ">
                                                <button data-toggle="modal" data-target="#exampleModal-1"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                        class="img-fluid  child1" alt="">
                                                </button>
                                            </div>
                                            <div class="col pl-0">
                                                <button data-toggle="modal" data-target="#exampleModal"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                        class="img-fluid child" alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="parent mt-2">
                                        <img src="{{ asset('member/app-assets/images/gallery/client-ful-8.png') }}"
                                            class="img-fluid parent-1" alt="">
                                        <div class="row parent1">
                                            <div class="col ">
                                                <button data-toggle="modal" data-target="#exampleModal-1"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                        class="img-fluid  child1" alt="">
                                                </button>
                                            </div>
                                            <div class="col pl-0">
                                                <button data-toggle="modal" data-target="#exampleModal"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                        class="img-fluid child" alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="parent">
                                        <img src="{{ asset('member/app-assets/images/gallery/client-ful-7.png') }}"
                                            class="img-fluid parent-1" alt="">
                                        <div class="row parent1">
                                            <div class="col ">
                                                <button data-toggle="modal" data-target="#exampleModal-1"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                        class="img-fluid  child1" alt="">
                                                </button>
                                            </div>
                                            <div class="col pl-0">
                                                <button data-toggle="modal" data-target="#exampleModal"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                        class="img-fluid child" alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="parent mt-2">
                                        <img src="{{ asset('member/app-assets/images/gallery/client-ful-9.png') }}"
                                            class="img-fluid parent-1" alt="">
                                        <div class="row parent1">
                                            <div class="col ">
                                                <button data-toggle="modal" data-target="#exampleModal-1"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Email-Send.png') }}"
                                                        class="img-fluid  child1" alt="">
                                                </button>
                                            </div>
                                            <div class="col pl-0">
                                                <button data-toggle="modal" data-target="#exampleModal"
                                                    class="">
                                                    <img src="{{ asset('member/app-assets/images/gallery/Plus-1.png') }}"
                                                        class="img-fluid child" alt="">
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-2 px-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-5 text-center">
                            <img src="{{ asset('app-assets/images/gallery/client-ful-10.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-1 my-auto ">

            </div>

        </div>
        <div class="row m-3   pt-5 justify-content-end">
            <div>
                <a href=""><button class="back-top">Back to top</button></a>
            </div>
        </div>
    </div>
</div>
@stop