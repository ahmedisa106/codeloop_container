@extends('company.layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>تفاصيل الطلب</h3>

            <div class="btns-header">


                {{--                <a href="#" class="btn btn-primary btn-air-primary btn-icon" data-bs-toggle="modal"--}}
                {{--                   data-bs-target="#example3">--}}
                {{--                    <i class="fa fa-plus"></i>--}}
                {{--                    اضافة تفريغة--}}
                {{--                </a>--}}

                @if($request->type =='delivery')
                    @if($request->status == 'waiting_approval')
                        <a href="#" class="btn btn-success btn-air-success btn-icon">
                            <i class="fa fa-plus"></i>
                            ابدأ التوصيل
                        </a>
                    @endif
                    @if($request->status == 'in_delivered')
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="container_rental_id" value="{{$containerRental->id}}">
                            <input type="hidden" name="driver_id" value="{{auth()->user()->id}}">


                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i>
                                تم التوصيل

                            </button>
                        </form>
                    @endif
                @else
                    @if($request->status == 'waiting_approval')
                        <a href="#" class="btn btn-success btn-air-success btn-icon">
                            <i class="fa fa-plus"></i>
                            ابدأ التفريغ
                        </a>
                    @endif

                    @if($request->status == 'in_discharge')
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="container_rental_id" value="{{$containerRental->id}}">
                            <input type="hidden" name="driver_id" value="{{auth()->user()->id}}">


                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i>
                                تم التفريغ

                            </button>
                        </form>
                    @endif

                @endif


            </div>
        </div>

        <div class="card-body">

            <div class="track-order-pop">
                <ul>
                    <li class="{{$request->status =='waiting_approval' ? 'procces':''}} {{$request->status =='in_delivered' ? 'active':''}} {{$request->status =='in_discharge' ? 'active':''}}  ">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 512 512"
                             height="512" viewBox="0 0 512 512" width="512">
                            <g fill="rgb(0,0,0)">
                                <path
                                    d="m429.165 405.098c0-40.673-33.09-73.763-73.763-73.763h-14.798l-27.404-13.705v-38.91c8.745-2.999 15.391-10.739 16.424-20.094 9.479-13.301 15.085-28.63 16.403-44.827h9.374c13.27 0 24.066-10.796 24.066-24.066v-33.133c0-3.822-.892-7.505-2.564-10.821 4.263-5.428 5.994-12.37 4.74-19.188-1.309-7.112-5.689-13.208-12.02-16.725-4.39-2.439-9.397-4.97-15.006-7.462v-45.204c0-31.54-25.66-57.2-57.2-57.2h-82.834c-15.278 0-29.643 5.95-40.446 16.754-10.804 10.804-16.754 25.168-16.753 40.446v45.204c-5.608 2.492-10.616 5.023-15.006 7.462-6.331 3.517-10.712 9.612-12.021 16.725-1.259 6.844.49 13.813 4.739 19.19-1.672 3.315-2.563 6.997-2.563 10.819v33.134c0 13.271 10.797 24.067 24.067 24.067h9.374c1.319 16.197 6.925 31.524 16.403 44.825 1.033 9.359 7.666 17.1 16.422 20.095v38.91l-27.405 13.704-6.514.003c-9.042 0-18.219 1.646-27.035 4.71-.144.044-.284.098-.424.151-10.236 3.616-19.971 9.15-28.403 16.34-16.885 14.397-26.184 33.064-26.184 52.561v82.833c0 13.271 10.796 24.066 24.066 24.066h119.099c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-12.2v-119.598c10.466 11.443 25.509 18.633 42.201 18.633s31.733-7.189 42.199-18.631v30.311c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-73.311l18.134 9.068v28.497c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-25.632h9.068c3.082 0 6.109.242 9.064.701v149.963h-51.265v-59.293c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v59.293h-42.2c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h149.1c6.429 0 12.472-2.503 17.018-7.049s7.05-10.59 7.049-17.018zm-64.698-215.365c0 4.999-4.067 9.066-9.066 9.066h-9.067v-46.771c.021.012.044.024.065.035 3.658 2.029 7.653 3.009 11.608 3.009 2.079 0 4.147-.276 6.149-.807.2.753.312 1.534.312 2.334v33.134zm-67.049-174.733c23.27 0 42.2 18.931 42.2 42.2v39.24c-7.925-2.804-16.724-5.397-26.418-7.551l.001-31.689c0-16.692-7.19-31.734-18.632-42.2zm-41.418 0c23.27 0 42.2 18.931 42.2 42.2v28.853c-12.767-2.01-26.825-3.219-42.199-3.219s-29.433 1.209-42.2 3.219v-28.853c-.001-23.269 18.93-42.2 42.199-42.2zm-83.616 42.2c0-11.272 4.389-21.869 12.359-29.84 7.971-7.97 18.569-12.36 29.84-12.36h2.848c-11.441 10.466-18.631 25.508-18.631 42.2v31.69c-9.693 2.153-18.492 4.746-26.416 7.55zm-27.273 72.105c.494-2.688 2.153-4.993 4.552-6.325 20.647-11.472 55.857-25.146 106.337-25.146s85.69 13.674 106.339 25.146c2.397 1.332 4.057 3.638 4.551 6.325.491 2.667-.23 5.388-2.035 7.531l-.074.09c-2.702 3.245-7.37 4.097-11.105 2.021-15.47-8.582-48.729-22.98-97.675-22.98s-82.205 14.398-97.675 22.98c-3.739 2.076-8.416 1.22-11.094-2.007l-.143-.172c-1.748-2.076-2.469-4.796-1.978-7.463zm2.423 60.428v-33.133c0-.8.113-1.582.313-2.336 5.809 1.542 12.175.898 17.757-2.199.021-.012.044-.024.066-.036v46.772h-9.067c-5.002 0-9.069-4.068-9.069-9.068zm33.135-44.849c16.763-6.871 42.06-13.917 75.332-13.917 33.273 0 58.57 7.047 75.333 13.918v61.419c0 11.799-2.692 23.17-7.841 33.498-.088-.097-.172-.197-.262-.293-2.898-3.078-6.554-5.316-10.542-6.531-3.102-19.349-19.912-34.178-40.121-34.178h-33.133c-20.209 0-37.02 14.829-40.121 34.178-3.988 1.215-7.645 3.453-10.542 6.531-.09.096-.173.195-.261.292-5.149-10.328-7.841-21.698-7.841-33.497v-61.42zm19.026 104.905c1.733-1.842 4.079-2.855 6.605-2.855 4.143 0 7.5-3.357 7.5-7.5 0-14.135 11.499-25.634 25.634-25.634h33.133c14.135 0 25.634 11.499 25.634 25.634 0 4.143 3.357 7.5 7.5 7.5 2.526 0 4.872 1.014 6.605 2.855 1.73 1.839 2.598 4.251 2.443 6.791-.294 4.836-4.729 8.617-9.876 8.474-11.765-.374-21.986-9.02-24.305-20.559-1.463-7.278-7.958-12.562-15.445-12.562h-18.246c-7.487 0-13.982 5.283-15.444 12.562-2.319 11.539-12.541 20.185-24.305 20.559-5.173.162-9.583-3.638-9.877-8.473-.154-2.541.713-4.953 2.444-6.792zm86.721 25.457c-9.491 4.2-19.778 6.39-30.414 6.39-10.638 0-20.926-2.189-30.416-6.389 10.386-5.57 18.094-15.559 20.554-27.796.058-.29.382-.517.738-.517h18.246c.357 0 .681.227.739.517 2.459 12.237 10.166 22.225 20.553 27.795zm-188.581 212.688v-82.833c0-21.621 15.386-40.068 34.699-50.263v142.162h-25.633c-4.999 0-9.066-4.067-9.066-9.066zm49.699 9.066v-148.168c5.783-1.621 11.651-2.494 17.35-2.494h.784v25.629c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.498l18.132-9.067v162.598zm108.466-115.967c-23.269 0-42.2-18.931-42.2-42.2 0 0-.001-.013-.001-.019v-52.616c12.919 6.857 27.277 10.438 42.202 10.438 14.923 0 29.28-3.58 42.198-10.436v52.634c.001 23.269-18.93 42.199-42.199 42.199zm155.51 113.312c-1.712 1.712-3.989 2.655-6.411 2.655h-25.633v-145.491c20.433 9.212 34.698 29.759 34.698 53.588l.001 82.837c0 2.421-.942 4.698-2.655 6.411z"/>
                                <path
                                    d="m222.868 188.95c4.143 0 7.5-3.357 7.5-7.5v-8.283c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v8.283c0 4.143 3.357 7.5 7.5 7.5z"/>
                                <path
                                    d="m289.134 188.95c4.143 0 7.5-3.357 7.5-7.5v-8.283c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v8.283c0 4.143 3.358 7.5 7.5 7.5z"/>
                                <path
                                    d="m251.859 64.7h8.283c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-8.283c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"/>
                            </g>
                        </svg>
                        <p>انتظار بدأ {{$request->type =='delivery' ? 'التوصيل':'التفريغ'}}</p>
                        <i class="fa fa-check-circle"></i>
                    </li>
                    <li class="{{$request->status =='in_delivered' ? 'procces':''}} {{$request->status =='delivered' ? 'active':''}} {{$containerRental->remaining_discharges ==0 ? 'active':''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                             viewBox="0 0 512 512" width="512">
                            <g>
                                <path
                                    d="m248.5 223.316v16.666c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-16.666h4.962c46.884 0 85.027-38.143 85.027-85.027v-36.198c0-4.142-3.358-7.5-7.5-7.5h-179.978c-4.142 0-7.5 3.358-7.5 7.5v36.198c0 46.884 38.143 85.027 85.027 85.027zm-74.989-85.027v-28.698h164.979v28.698c0 38.613-31.414 70.027-70.027 70.027h-24.925c-38.613 0-70.027-31.414-70.027-70.027z"/>
                                <path
                                    d="m395.041 458.7h-5.202v-79.37c0-24.217-6.305-48.007-18.232-68.798-11.584-20.19-28.165-37.12-47.952-48.961-3.096-1.853-4.945-5.155-4.945-8.833s1.849-6.98 4.945-8.833c19.787-11.84 36.369-28.77 47.952-48.96 11.928-20.791 18.232-44.581 18.232-68.798v-72.847h5.202c14.695 0 26.65-11.955 26.65-26.65s-11.954-26.65-26.65-26.65h-278.082c-14.695 0-26.65 11.955-26.65 26.65s11.955 26.65 26.65 26.65h5.202v72.846c0 24.217 6.305 48.007 18.233 68.798 11.583 20.19 28.165 37.12 47.952 48.96 3.096 1.853 4.944 5.155 4.944 8.833 0 3.679-1.848 6.981-4.944 8.833-19.787 11.84-36.369 28.771-47.952 48.961-11.928 20.791-18.233 44.581-18.233 68.798v79.37h-5.202c-14.695 0-26.65 11.955-26.65 26.65s11.954 26.651 26.65 26.651h135.541c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-135.541c-6.424 0-11.65-5.226-11.65-11.65s5.227-11.65 11.65-11.65h278.082c6.424 0 11.65 5.226 11.65 11.65s-5.226 11.65-11.65 11.65h-112.541c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h112.541c14.695 0 26.65-11.955 26.65-26.65s-11.954-26.65-26.65-26.65zm-257.88-79.37c0-42.962 22.564-83.152 58.887-104.887 7.666-4.587 12.242-12.701 12.242-21.705s-4.576-17.118-12.242-21.705c-36.323-21.735-58.887-61.925-58.887-104.887v-72.846h48.274c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-68.476c-6.424 0-11.65-5.226-11.65-11.65s5.226-11.65 11.65-11.65h278.082c6.424 0 11.65 5.226 11.65 11.65s-5.227 11.65-11.65 11.65h-174.606c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h154.404v72.846c0 42.962-22.564 83.152-58.887 104.887-7.666 4.587-12.243 12.701-12.243 21.705s4.577 17.118 12.243 21.705c36.323 21.735 58.887 61.925 58.887 104.887v79.37h-237.678z"/>
                                <path
                                    d="m351.755 425.512-31.048-37.318c-17.047-20.49-41.95-31.862-68.293-31.203-26.393.661-50.729 13.295-66.768 34.663l-25.634 34.152c-1.706 2.272-1.981 5.314-.711 7.855 1.27 2.542 3.868 4.147 6.709 4.147h179.98c2.909 0 5.556-1.682 6.791-4.316 1.234-2.633.834-5.744-1.026-7.98zm-170.737-2.703 16.626-22.15c13.267-17.676 33.367-28.126 55.146-28.672 21.738-.541 42.292 8.86 56.387 25.801l20.817 25.021z"/>
                                <path
                                    d="m256 311.578c-4.142 0-7.5 3.358-7.5 7.5v11.491c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-11.491c0-4.142-3.358-7.5-7.5-7.5z"/>
                                <path
                                    d="m263.5 272.904c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.491c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5z"/>
                            </g>
                        </svg>
                        <p> جاري {{$request->type =='delivery' ? 'التوصيل':'التفريغ'}} </p>
                        <i class="fa fa-check-circle"></i>
                    </li>
                    <li class="{{$containerRental->status =='delivered' ? 'procces':''}} {{$containerRental->status =='complete' ? 'active':''}} {{$containerRental->remaining_discharges ==0 ? 'active':''}}">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                             xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M170.845,37.777c-54.5,0-98.839,44.339-98.839,98.84c0,54.501,44.339,98.84,98.839,98.84    c54.501,0,98.84-44.339,98.84-98.84C269.685,82.117,225.346,37.777,170.845,37.777z M170.845,220.25    c-46.115,0-83.631-37.517-83.631-83.632c0-46.115,37.516-83.632,83.631-83.632c46.114,0,83.632,37.517,83.632,83.632    C254.477,182.733,216.959,220.25,170.845,220.25z"/>
                            </g>
                        </g>
                            <g>
                                <g>
                                    <path
                                        d="M153.882,286.956H71.678c-4.2,0-7.604,3.405-7.604,7.604s3.405,7.604,7.604,7.604h82.204c4.2,0,7.604-3.405,7.604-7.604    S158.082,286.956,153.882,286.956z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M123.888,254.167H41.684c-4.2,0-7.604,3.405-7.604,7.604s3.404,7.604,7.604,7.604h82.204c4.2,0,7.604-3.405,7.604-7.604    C131.492,257.571,128.088,254.167,123.888,254.167z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M51.231,136.193l-43.542-0.487c-2.052-0.042-3.989,0.768-5.431,2.197C0.813,139.332,0,141.279,0,143.309v140.233    c0,4.199,3.404,7.604,7.604,7.604s7.604-3.405,7.604-7.604V150.999l35.853,0.4c4.208,0.073,7.641-3.319,7.689-7.519    C58.797,139.682,55.431,136.24,51.231,136.193z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M504.396,359.371h-12.109v-90.456c0-2.477-1.207-4.8-3.234-6.223l-49.825-34.984l-30.033-82.589    c-1.082-2.976-3.895-4.97-7.062-5.005l-110.559-1.236c-4.228-0.042-7.641,3.319-7.689,7.519c-0.047,4.199,3.319,7.641,7.519,7.688    l22.606,0.252V359.37H15.208v-31.533c0-4.199-3.404-7.604-7.604-7.604S0,323.638,0,327.837v39.137v44.073    c0,4.199,3.404,7.604,7.604,7.604h43.9c-0.162,1.645-0.248,3.31-0.248,4.997c0,27.886,22.687,50.574,50.574,50.574    s50.574-22.687,50.574-50.574c0-1.686-0.087-3.353-0.248-4.997h182.154c-0.162,1.645-0.248,3.31-0.248,4.997    c0,27.886,22.687,50.574,50.573,50.574c27.887,0,50.574-22.687,50.574-50.574c0-1.686-0.087-3.353-0.248-4.997h69.434    c4.2,0,7.604-3.405,7.604-7.604v-44.073C512,362.776,508.596,359.371,504.396,359.371z M355.87,154.805h0.001l40.829,0.456    l25.742,70.792H355.87V154.805z M329.219,154.507l11.444,0.128v71.417h-11.444V154.507z M329.219,241.261h11.444v81.388    c0,4.199,3.404,7.604,7.604,7.604s7.604-3.405,7.604-7.604v-81.388h76.194l30.888,21.688h-10.065    c-13.138,0-23.826,10.688-23.826,23.826s10.688,23.826,23.826,23.826h24.191v48.771H329.219V241.261z M477.08,278.157v17.236    h-24.191c-4.752,0-8.618-3.866-8.618-8.618c0-4.752,3.866-8.618,8.618-8.618H477.08z M55.479,403.443H15.208v-28.865h74.386    C74.273,378.4,61.702,389.225,55.479,403.443z M101.83,459.015c-19.501,0-35.367-15.865-35.367-35.367    c0-19.502,15.865-35.367,35.367-35.367c19.502,0,35.367,15.865,35.367,35.367C137.197,443.15,121.331,459.015,101.83,459.015z     M338.286,403.443H148.18c-6.222-14.218-18.794-25.042-34.114-28.865H372.4C357.08,378.4,344.508,389.225,338.286,403.443z     M384.635,459.015c-19.501,0-35.366-15.865-35.366-35.367c0-19.502,15.864-35.367,35.366-35.367    c19.502,0,35.367,15.865,35.367,35.367C420.001,443.15,404.135,459.015,384.635,459.015z M496.792,403.443h-65.808    c-6.222-14.218-18.794-25.042-34.114-28.865h87.814h12.109V403.443z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M384.635,400.07c-13.001,0-23.578,10.578-23.578,23.578c0,13.001,10.578,23.579,23.578,23.579    c13.002,0,23.579-10.578,23.579-23.579C408.214,410.646,397.636,400.07,384.635,400.07z M384.635,432.02    c-4.616,0-8.37-3.755-8.37-8.371s3.754-8.37,8.37-8.37c4.616,0,8.371,3.755,8.371,8.37    C393.006,428.263,389.251,432.02,384.635,432.02z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M101.83,400.07c-13.002,0-23.579,10.578-23.579,23.578c0,13.001,10.578,23.579,23.579,23.579s23.579-10.578,23.579-23.579    C125.41,410.646,114.832,400.07,101.83,400.07z M101.83,432.02c-4.616,0-8.371-3.755-8.371-8.371s3.755-8.37,8.371-8.37    c4.616,0,8.371,3.755,8.371,8.37C110.202,428.263,106.445,432.02,101.83,432.02z"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M215.144,110.672c-2.971-2.97-7.784-2.97-10.754,0l-44.44,44.441l-22.65-22.651c-2.97-2.97-7.783-2.97-10.754,0    c-2.97,2.97-2.97,7.784,0,10.753l28.025,28.027c1.426,1.427,3.36,2.227,5.378,2.227s3.95-0.801,5.378-2.227l49.817-49.817    C218.114,118.455,218.114,113.641,215.144,110.672z"/>
                                </g>
                            </g>
                    </svg>
                        <p> تم {{$request->type =='delivery' ? 'التوصيل':'التفريغ'}}</p>
                        <i class="fa fa-check-circle"></i>
                    </li>


                </ul>
            </div>


            <div class="box-details">
                <article class="icontext">
                    <div class="title-box">
                        <div class="header-icon">
                            <div class="icon-style">
                                <i class="icon-package"></i>
                            </div>
                            <h6>بيانات الطلب</h6>
                        </div>


                        {{--                        <span class="{{$class}}">{{$status}}</span>--}}

                    </div>
                    <div class="text">
                        <ul>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/recycle.svg" alt="">
                                <p>رقم الحاوية:</p>
                                <span>{{$containerRental->container->number}}</span>
                                <em>{{$containerRental->category->name}}</em>
                                <!-- <em>انقاض</em> -->
                            </li>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/full-size.svg" alt="">
                                <p>حجم الحاوية:</p>
                                <span> {{$containerRental->categorySize->size}} {{$containerRental->category->unit}}</span>
                            </li>

                        </ul>
                    </div>
                </article>
                <article class="icontext">
                    <div class="title-box">
                        <div class="header-icon">
                            <div class="icon-style">
                                <i class="icon-user"></i>
                            </div>
                            <h6>بيانات العميل</h6>
                        </div>
                    </div>
                    <div class="text">
                        <ul>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/best-employee.svg" alt="">
                                <p>اسم العميل:</p>
                                <span>{{$containerRental->customer->name}}</span>
                            </li>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/phone.svg" alt="">
                                <p>رقم الجوال:</p>
                                <span class="ltr">{{$containerRental->customer->phone}}</span>
                            </li>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/email.svg" alt="">
                                <p>البريد الالكتروني:</p>
                                <span>{{$containerRental->customer->email}}</span>
                            </li>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/placeholder-map.svg" alt="">
                                <p>المدينة:</p>
                                <span>{{$containerRental->customerAddress->address}}</span>
                            </li>
                            <li>
                                <img src="{{asset('assets/dashboard')}}/images/icons/placeholder.svg" alt="">
                                <p>العنوان علي الخريطة:</p>
                                <span>{{$containerRental->customerAddress->latitude}}</span>
                            </li>
                        </ul>
                    </div>
                </article>


            </div>

        </div>
    </div>



@endsection
