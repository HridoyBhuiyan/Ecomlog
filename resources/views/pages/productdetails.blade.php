@extends('app')
@section('content')
    <div class="container">
       <div class="my-4">
{{--           breadcrumb start here--}}
           <nav aria-label="breadcrumb m-0 p-0">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item">
                       <a href="#">
                           <i class="fa-sharp fa-solid fa-house"></i>
                       </a>
                   </li>
                   <li class="breadcrumb-item"><a href="#">Library</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Data</li>
               </ol>
           </nav>
{{--           breadcrumb end here--}}
       </div>



{{--        photo section start here--}}
        <div class="row">
            <div class="col-lg-5 col-md-4 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 my-2 d-flex justify-content-center productBinImg">
                        <img src="storage/phoneimg.jpg" alt="">
                    </div>
                    <div class="col-12 productExtraImg d-lg-flex justify-content-center">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                        <img class="m-2" src="storage/phoneimg.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <h1 class="pageTitle">Samsung Galaxy Tab A 8.0" Snapdragon 429 2GB RAM 32GB ROM Android Tablet</h1>
                <div class="mt-4 titleBelowItem">
                    <p class="infoLabel">Price: 19,300$</p>
                    <p class="infoLabel">Regular Price: 19,300$</p>
                    <p class="infoLabel">Brand: 19,300$</p>
                    <p class="infoLabel"><i class="fa-solid fa-heart"></i> 400</p>
                </div>
                <div class="productKeyFeature d-flex flex-column">
                    <h5 class="mt-lg-5 mt-md-5 mt-sm-2">Key Feature</h5>
                    <span class="regularText">MPN : T295-BSM-T295N</span>
                    <span class="regularText">Model : Galaxy Tab A</span>
                    <span class="regularText">Display : 8-inch WXGA Display</span>
                    <span class="regularText">Storage : 2GB RAM, 32GB ROM</span>
                    <span class="regularText">CPU : Snapdragon 429</span>
                    <span class="regularText">GPU : Adreno 504</span>
                    <span class="regularText">Battery : 5100 mAh</span>
                </div>
            </div>
        </div>
{{--        photo section end here--}}



{{--        tab start here--}}
        <div class="row my-5">
            <div class="col-lg-8 col-md-8 col-sm-12">


                <div class="scrollContainer">
                    <div>
                        <button id="button-1" class="btnScroll btn">Specification</button>
                        <button id="button-2" class="btnScroll btn">Description</button>
                        <button id="button-3" class="btnScroll btn">Pros & cons</button>
                        <button id="button-4" class="btnScroll btn">YouTube Video</button>
                        <button id="button-5" class="btnScroll btn">Things to know</button>
                        <button id="button-6" class="btnScroll btn">FAQ</button>
                    </div>
                    <div id="section-1">


                        <div class="">
                            <p>Specification</p>

                            <table>
                                <tr>
                                    <th>Processor</th>
                                </tr>
                                <tr>
                                    <td>Processor Brand</td><td>Intel</td>
                                </tr>
                                <tr>
                                    <td>Processor Model</td><td>Celeron 520u</td>
                                </tr>
                                <tr>
                                    <td>Generation</td><td>10th generation</td>
                                </tr>
                                <tr>
                                    <td>Processor Frequency</td><td>1.90 GHz</td>
                                </tr>
                                <tr>
                                    <td>Processor Core</td><td>2</td>
                                </tr>
                                <tr>
                                    <td>Processor Thread</td><td>2</td>
                                </tr>
                                <tr>
                                    <td>CPU Cache</td><td>2 MB</td>
                                </tr>
                                <tr>
                                    <td>Display Size</td><td>14 Inch</td>
                                </tr>
                                <tr>
                                    <td>Display Model</td><td>HD (1366 x 768)</td>
                                </tr>
                                <tr>
                                    <td>Touch screen</td><td>No</td>
                                </tr>
                                <tr>
                                    <td>Display Feature</td><td>16:9 LED Backlit, Non-reflective Anti-Glare</td>
                                </tr>



                            </table>




                        </div>



                    </div>
                    <div id="section-2">
                        <!-- Content for section 2 -->
                        section 2<br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-3">
                        <!-- Content for section 3 -->
                        section 3<br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-4">
                        <!-- Content for section 4 -->
                        section 4<br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                    <div id="section-5">
                        section 5<br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                        <!-- Content for section 5 -->
                    </div>
                    <div id="section-6">
                        <!-- Content for section 6 -->
                        section 6<br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>




            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                sidebar
            </div>
        </div>

{{--        tab end here--}}
    </div>
@endsection
