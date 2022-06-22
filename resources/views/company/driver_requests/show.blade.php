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
            <form action="{{route('driver-requests.inDelivery')}}" method="post">
                @csrf
                <input type="hidden" name="request_id" value="{{$request->id}}">
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="fa fa-hourglass-start"></i>
                    بدأ التوصيل
                </button>
            </form>

            @endif
            @if($request->status == 'in_delivery')

            <a href="#" class="btn  btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#example2">
                <i class="fa fa-check"></i>
                تم التوصيل
            </a>
            {{--                        <form action="" method="post">--}}
            {{--                            @csrf--}}
            {{--                            <input type="hidden" name="container_rental_id" value="{{$containerRental->id}}">--}}
            {{--                            <input type="hidden" name="driver_id" value="{{auth()->user()->id}}">--}}


            {{--                            <button type="submit" class="btn btn-success">--}}
            {{--                                <i class="fa fa-check"></i>--}}
            {{--                                تم التوصيل--}}

            {{--                            </button>--}}
            {{--                        </form>--}}
            @endif
            @else
            @if($request->status == 'waiting_approval')
            <form action="{{route('driver-requests.inDischarge')}}" method="post">
                @csrf
                <input type="hidden" name="request_id" value="{{$request->id}}">
                <button type="submit" class="btn btn-primary btn-icon">
                    <i class="fa fa-hourglass-start"></i>
                    بدأ التفريغ
                </button>
            </form>
            @endif

            @if($request->status == 'in_discharge')
            <a href="#" class="btn  btn-success btn-icon" data-bs-toggle="modal" data-bs-target="#example3">
                <i class="fa fa-check"></i>
                تم التفريغ
            </a>
            @endif

            @endif


        </div>
    </div>

    <div class="card-body">

        <div class="track-order-pop grid-3">
            <ul>
                <li
                    class="{{$request->status =='waiting_approval' ? 'procces':''}} {{$request->status =='in_delivery' ? 'active':''}} {{$request->status =='in_discharge' ? 'active':''}} {{$request->status =='delivered' ? 'active':''}} {{$request->status =='discharged' ? 'active':''}}  ">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" enable-background="new 0 0 512 512"
                        height="512" viewBox="0 0 512 512" width="512">
                        <g fill="rgb(0,0,0)">
                            <path
                                d="m429.165 405.098c0-40.673-33.09-73.763-73.763-73.763h-14.798l-27.404-13.705v-38.91c8.745-2.999 15.391-10.739 16.424-20.094 9.479-13.301 15.085-28.63 16.403-44.827h9.374c13.27 0 24.066-10.796 24.066-24.066v-33.133c0-3.822-.892-7.505-2.564-10.821 4.263-5.428 5.994-12.37 4.74-19.188-1.309-7.112-5.689-13.208-12.02-16.725-4.39-2.439-9.397-4.97-15.006-7.462v-45.204c0-31.54-25.66-57.2-57.2-57.2h-82.834c-15.278 0-29.643 5.95-40.446 16.754-10.804 10.804-16.754 25.168-16.753 40.446v45.204c-5.608 2.492-10.616 5.023-15.006 7.462-6.331 3.517-10.712 9.612-12.021 16.725-1.259 6.844.49 13.813 4.739 19.19-1.672 3.315-2.563 6.997-2.563 10.819v33.134c0 13.271 10.797 24.067 24.067 24.067h9.374c1.319 16.197 6.925 31.524 16.403 44.825 1.033 9.359 7.666 17.1 16.422 20.095v38.91l-27.405 13.704-6.514.003c-9.042 0-18.219 1.646-27.035 4.71-.144.044-.284.098-.424.151-10.236 3.616-19.971 9.15-28.403 16.34-16.885 14.397-26.184 33.064-26.184 52.561v82.833c0 13.271 10.796 24.066 24.066 24.066h119.099c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-12.2v-119.598c10.466 11.443 25.509 18.633 42.201 18.633s31.733-7.189 42.199-18.631v30.311c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-73.311l18.134 9.068v28.497c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-25.632h9.068c3.082 0 6.109.242 9.064.701v149.963h-51.265v-59.293c0-4.142-3.357-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v59.293h-42.2c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h149.1c6.429 0 12.472-2.503 17.018-7.049s7.05-10.59 7.049-17.018zm-64.698-215.365c0 4.999-4.067 9.066-9.066 9.066h-9.067v-46.771c.021.012.044.024.065.035 3.658 2.029 7.653 3.009 11.608 3.009 2.079 0 4.147-.276 6.149-.807.2.753.312 1.534.312 2.334v33.134zm-67.049-174.733c23.27 0 42.2 18.931 42.2 42.2v39.24c-7.925-2.804-16.724-5.397-26.418-7.551l.001-31.689c0-16.692-7.19-31.734-18.632-42.2zm-41.418 0c23.27 0 42.2 18.931 42.2 42.2v28.853c-12.767-2.01-26.825-3.219-42.199-3.219s-29.433 1.209-42.2 3.219v-28.853c-.001-23.269 18.93-42.2 42.199-42.2zm-83.616 42.2c0-11.272 4.389-21.869 12.359-29.84 7.971-7.97 18.569-12.36 29.84-12.36h2.848c-11.441 10.466-18.631 25.508-18.631 42.2v31.69c-9.693 2.153-18.492 4.746-26.416 7.55zm-27.273 72.105c.494-2.688 2.153-4.993 4.552-6.325 20.647-11.472 55.857-25.146 106.337-25.146s85.69 13.674 106.339 25.146c2.397 1.332 4.057 3.638 4.551 6.325.491 2.667-.23 5.388-2.035 7.531l-.074.09c-2.702 3.245-7.37 4.097-11.105 2.021-15.47-8.582-48.729-22.98-97.675-22.98s-82.205 14.398-97.675 22.98c-3.739 2.076-8.416 1.22-11.094-2.007l-.143-.172c-1.748-2.076-2.469-4.796-1.978-7.463zm2.423 60.428v-33.133c0-.8.113-1.582.313-2.336 5.809 1.542 12.175.898 17.757-2.199.021-.012.044-.024.066-.036v46.772h-9.067c-5.002 0-9.069-4.068-9.069-9.068zm33.135-44.849c16.763-6.871 42.06-13.917 75.332-13.917 33.273 0 58.57 7.047 75.333 13.918v61.419c0 11.799-2.692 23.17-7.841 33.498-.088-.097-.172-.197-.262-.293-2.898-3.078-6.554-5.316-10.542-6.531-3.102-19.349-19.912-34.178-40.121-34.178h-33.133c-20.209 0-37.02 14.829-40.121 34.178-3.988 1.215-7.645 3.453-10.542 6.531-.09.096-.173.195-.261.292-5.149-10.328-7.841-21.698-7.841-33.497v-61.42zm19.026 104.905c1.733-1.842 4.079-2.855 6.605-2.855 4.143 0 7.5-3.357 7.5-7.5 0-14.135 11.499-25.634 25.634-25.634h33.133c14.135 0 25.634 11.499 25.634 25.634 0 4.143 3.357 7.5 7.5 7.5 2.526 0 4.872 1.014 6.605 2.855 1.73 1.839 2.598 4.251 2.443 6.791-.294 4.836-4.729 8.617-9.876 8.474-11.765-.374-21.986-9.02-24.305-20.559-1.463-7.278-7.958-12.562-15.445-12.562h-18.246c-7.487 0-13.982 5.283-15.444 12.562-2.319 11.539-12.541 20.185-24.305 20.559-5.173.162-9.583-3.638-9.877-8.473-.154-2.541.713-4.953 2.444-6.792zm86.721 25.457c-9.491 4.2-19.778 6.39-30.414 6.39-10.638 0-20.926-2.189-30.416-6.389 10.386-5.57 18.094-15.559 20.554-27.796.058-.29.382-.517.738-.517h18.246c.357 0 .681.227.739.517 2.459 12.237 10.166 22.225 20.553 27.795zm-188.581 212.688v-82.833c0-21.621 15.386-40.068 34.699-50.263v142.162h-25.633c-4.999 0-9.066-4.067-9.066-9.066zm49.699 9.066v-148.168c5.783-1.621 11.651-2.494 17.35-2.494h.784v25.629c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.498l18.132-9.067v162.598zm108.466-115.967c-23.269 0-42.2-18.931-42.2-42.2 0 0-.001-.013-.001-.019v-52.616c12.919 6.857 27.277 10.438 42.202 10.438 14.923 0 29.28-3.58 42.198-10.436v52.634c.001 23.269-18.93 42.199-42.199 42.199zm155.51 113.312c-1.712 1.712-3.989 2.655-6.411 2.655h-25.633v-145.491c20.433 9.212 34.698 29.759 34.698 53.588l.001 82.837c0 2.421-.942 4.698-2.655 6.411z" />
                            <path
                                d="m222.868 188.95c4.143 0 7.5-3.357 7.5-7.5v-8.283c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v8.283c0 4.143 3.357 7.5 7.5 7.5z" />
                            <path
                                d="m289.134 188.95c4.143 0 7.5-3.357 7.5-7.5v-8.283c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v8.283c0 4.143 3.358 7.5 7.5 7.5z" />
                            <path
                                d="m251.859 64.7h8.283c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-8.283c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z" />
                        </g>
                    </svg>
                    <p>انتظار بدأ {{$request->type =='delivery' ? 'التوصيل':'التفريغ'}}</p>
                    <i class="fa fa-check-circle"></i>
                </li>
                <li
                    class="{{$request->status =='in_delivery' ? 'procces':''}} {{$request->status =='in_discharge' ? 'procces':''}} {{$request->status =='delivered' ? 'active':''}} {{$request->status =='discharged' ? 'active':''}} ">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                        viewBox="0 0 512 512" width="512">
                        <g>
                            <path
                                d="m248.5 223.316v16.666c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-16.666h4.962c46.884 0 85.027-38.143 85.027-85.027v-36.198c0-4.142-3.358-7.5-7.5-7.5h-179.978c-4.142 0-7.5 3.358-7.5 7.5v36.198c0 46.884 38.143 85.027 85.027 85.027zm-74.989-85.027v-28.698h164.979v28.698c0 38.613-31.414 70.027-70.027 70.027h-24.925c-38.613 0-70.027-31.414-70.027-70.027z" />
                            <path
                                d="m395.041 458.7h-5.202v-79.37c0-24.217-6.305-48.007-18.232-68.798-11.584-20.19-28.165-37.12-47.952-48.961-3.096-1.853-4.945-5.155-4.945-8.833s1.849-6.98 4.945-8.833c19.787-11.84 36.369-28.77 47.952-48.96 11.928-20.791 18.232-44.581 18.232-68.798v-72.847h5.202c14.695 0 26.65-11.955 26.65-26.65s-11.954-26.65-26.65-26.65h-278.082c-14.695 0-26.65 11.955-26.65 26.65s11.955 26.65 26.65 26.65h5.202v72.846c0 24.217 6.305 48.007 18.233 68.798 11.583 20.19 28.165 37.12 47.952 48.96 3.096 1.853 4.944 5.155 4.944 8.833 0 3.679-1.848 6.981-4.944 8.833-19.787 11.84-36.369 28.771-47.952 48.961-11.928 20.791-18.233 44.581-18.233 68.798v79.37h-5.202c-14.695 0-26.65 11.955-26.65 26.65s11.954 26.651 26.65 26.651h135.541c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-135.541c-6.424 0-11.65-5.226-11.65-11.65s5.227-11.65 11.65-11.65h278.082c6.424 0 11.65 5.226 11.65 11.65s-5.226 11.65-11.65 11.65h-112.541c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h112.541c14.695 0 26.65-11.955 26.65-26.65s-11.954-26.65-26.65-26.65zm-257.88-79.37c0-42.962 22.564-83.152 58.887-104.887 7.666-4.587 12.242-12.701 12.242-21.705s-4.576-17.118-12.242-21.705c-36.323-21.735-58.887-61.925-58.887-104.887v-72.846h48.274c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5h-68.476c-6.424 0-11.65-5.226-11.65-11.65s5.226-11.65 11.65-11.65h278.082c6.424 0 11.65 5.226 11.65 11.65s-5.227 11.65-11.65 11.65h-174.606c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h154.404v72.846c0 42.962-22.564 83.152-58.887 104.887-7.666 4.587-12.243 12.701-12.243 21.705s4.577 17.118 12.243 21.705c36.323 21.735 58.887 61.925 58.887 104.887v79.37h-237.678z" />
                            <path
                                d="m351.755 425.512-31.048-37.318c-17.047-20.49-41.95-31.862-68.293-31.203-26.393.661-50.729 13.295-66.768 34.663l-25.634 34.152c-1.706 2.272-1.981 5.314-.711 7.855 1.27 2.542 3.868 4.147 6.709 4.147h179.98c2.909 0 5.556-1.682 6.791-4.316 1.234-2.633.834-5.744-1.026-7.98zm-170.737-2.703 16.626-22.15c13.267-17.676 33.367-28.126 55.146-28.672 21.738-.541 42.292 8.86 56.387 25.801l20.817 25.021z" />
                            <path
                                d="m256 311.578c-4.142 0-7.5 3.358-7.5 7.5v11.491c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-11.491c0-4.142-3.358-7.5-7.5-7.5z" />
                            <path
                                d="m263.5 272.904c0-4.142-3.358-7.5-7.5-7.5s-7.5 3.358-7.5 7.5v11.491c0 4.142 3.358 7.5 7.5 7.5s7.5-3.358 7.5-7.5z" />
                        </g>
                    </svg>
                    <p> في الطريق {{$request->type =='delivery' ? 'للتوصيل':'للتفريغ'}} </p>
                    <i class="fa fa-check-circle"></i>
                </li>
                <li
                    class="{{$request->status =='delivered' ? 'active':''}} {{$request->status =='discharged' ? 'active':''}} ">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Capa_1" enable-background="new 0 0 512 512" height="512"
                        viewBox="0 0 512 512" width="512">
                        <g>
                            <path
                                d="m360.397 158.002c-.004-10.791-8.786-19.569-19.576-19.569h-6.894c-10.794 0-19.576 8.782-19.576 19.576v68.614c0 10.794 8.782 19.576 19.576 19.576h6.917c5.23 0 10.147-2.037 13.845-5.736 3.697-3.699 5.733-8.616 5.731-13.847zm-16.316 71.857c-.864.865-2.014 1.341-3.236 1.341h-6.917c-2.523 0-4.576-2.053-4.576-4.576v-68.614c0-2.523 2.053-4.576 4.576-4.576h6.894c2.522 0 4.575 2.052 4.576 4.575l.023 68.614c0 1.222-.476 2.371-1.34 3.236z">
                            </path>
                            <path
                                d="m426.186 138.433h-36.33c-5.23 0-10.147 2.037-13.845 5.737-3.698 3.699-5.733 8.617-5.731 13.848l.031 68.614c.005 10.79 8.787 19.567 19.576 19.567h52.436c6.017 0 11.61-2.705 15.345-7.421 3.736-4.716 5.088-10.78 3.711-16.637l-16.137-68.615c-2.091-8.886-9.927-15.093-19.056-15.093zm19.724 91.032c-.513.648-1.662 1.735-3.587 1.735h-52.436c-2.522 0-4.575-2.052-4.576-4.574l-.031-68.614c0-1.223.475-2.373 1.34-3.237.864-.865 2.014-1.341 3.236-1.341h36.33c2.134 0 3.966 1.451 4.455 3.528l16.137 68.615c.44 1.873-.355 3.24-.868 3.888z">
                            </path>
                            <path
                                d="m501.47 328.92v-73.41c0-.578-.067-1.154-.199-1.717l-8.97-38.15c-.948-4.032-4.984-6.531-9.018-5.584-4.032.948-6.532 4.985-5.584 9.018l8.771 37.303v13.217h-16.599c-13.017 0-23.607 10.59-23.607 23.607s10.59 23.607 23.607 23.607h16.599v10.833h-47.971c-11.192-9.229-25.524-14.779-41.129-14.779-32.987 0-60.272 24.803-64.232 56.735h-24.848v-233.52c0-7.846 6.383-14.23 14.23-14.23h116.51c9.293 0 17.279 6.331 19.419 15.387l12.38 52.64c.948 4.032 4.985 6.531 9.018 5.584 4.032-.948 6.532-4.986 5.584-9.018l-12.382-52.648c-3.749-15.865-17.738-26.945-34.019-26.945h-28.57v-16.64c0-11.34-9.226-20.565-20.566-20.565h-11.071c-11.34 0-20.566 9.226-20.566 20.565v16.64h-35.737c-5.164 0-10.016 1.351-14.23 3.711v-8.441c0-16.415-13.355-29.77-29.77-29.77h-144.12c-11.529 0-21.142 8.33-23.156 19.285h-50.616c-19.617 0-35.577 15.959-35.577 35.576v108.749h-3.261c-12.015 0-21.79 9.775-21.79 21.79v29.26c0 12.015 9.775 21.79 21.79 21.79h8.469c-.156.947-.257 1.913-.257 2.903v54.983c0 9.875 8.03 17.91 17.9 17.91h11.747c3.496 32.426 31.023 57.758 64.362 57.758 33.34 0 60.866-25.332 64.362-57.758l144.635.003c3.498 32.424 31.023 57.755 64.362 57.755 33.162 0 60.565-25.067 64.296-57.245h33.367c9.355 0 16.966-7.611 16.966-16.966v-23.533c.001-7.077-4.358-13.149-10.529-15.69zm-15-27.109h-16.599c-4.746 0-8.607-3.861-8.607-8.607s3.861-8.607 8.607-8.607h16.599zm-113.212-211.601c0-3.069 2.497-5.565 5.566-5.565h11.071c3.069 0 5.566 2.497 5.566 5.565v16.637h-22.203zm-358.258 196.8v-29.26c0-3.744 3.046-6.79 6.79-6.79h42.69c3.031 0 5.764-1.824 6.926-4.624l30.55-73.56c1.589-3.825-.224-8.214-4.05-9.803-3.826-1.587-8.214.225-9.803 4.05l-28.63 68.937h-19.421v-108.749c0-11.346 9.23-20.576 20.577-20.576h50.222v5.64l-11.237 27.059c-1.588 3.826.225 8.214 4.05 9.803 3.826 1.59 8.215-.224 9.803-4.05l11.81-28.44c.378-.912.573-1.889.573-2.876v-17.871c0-4.714 3.835-8.55 8.55-8.55h144.12c8.144 0 14.77 6.626 14.77 14.77v191.68h-271.5c-3.744 0-6.79-3.046-6.79-6.79zm30.002 79.677v-54.983c0-1.599 1.301-2.9 2.9-2.9h245.388v60.793h-105.048c-3.962-31.93-31.246-56.731-64.231-56.731s-60.269 24.801-64.231 56.731h-11.878c-1.599 0-2.9-1.306-2.9-2.91zm79.009 60.668c-27.429 0-49.745-22.315-49.745-49.745 0-27.429 22.315-49.745 49.745-49.745s49.745 22.315 49.745 49.745-22.316 49.745-49.745 49.745zm273.359 0c-27.43 0-49.745-22.315-49.745-49.745 0-27.429 22.315-49.745 49.745-49.745 27.429 0 49.745 22.315 49.745 49.745s-22.316 49.745-49.745 49.745zm99.63-59.211c0 1.084-.882 1.966-1.966 1.966h-33.367c-1.163-10.03-4.626-19.362-9.849-27.466h42.036c.039 0 .077.006.116.006s.077-.005.116-.006h.947c1.084 0 1.966.882 1.966 1.966v23.534z">
                            </path>
                            <path
                                d="m124.011 343.103c-19.027 0-34.507 15.48-34.507 34.507 0 19.028 15.48 34.508 34.507 34.508 19.028 0 34.508-15.48 34.508-34.508 0-19.027-15.48-34.507-34.508-34.507zm0 54.015c-10.756 0-19.507-8.751-19.507-19.508 0-10.756 8.751-19.507 19.507-19.507 10.757 0 19.508 8.751 19.508 19.507 0 10.757-8.751 19.508-19.508 19.508z">
                            </path>
                            <path
                                d="m397.37 343.103c-19.028 0-34.508 15.48-34.508 34.507 0 19.028 15.48 34.508 34.508 34.508 19.027 0 34.507-15.48 34.507-34.508 0-19.027-15.48-34.507-34.507-34.507zm0 54.015c-10.757 0-19.508-8.751-19.508-19.508 0-10.756 8.751-19.507 19.508-19.507 10.756 0 19.507 8.751 19.507 19.507 0 10.757-8.751 19.508-19.507 19.508z">
                            </path>
                            <path
                                d="m348.457 257.811h-20.235c-4.142 0-7.5 3.358-7.5 7.5s3.358 7.5 7.5 7.5h20.235c4.142 0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5z">
                            </path>
                            <path
                                d="m166.072 122.759c-3.824-1.589-8.214.224-9.803 4.049l-53.872 129.691c-1.589 3.825.224 8.214 4.049 9.803.94.391 1.915.576 2.874.576 2.94 0 5.731-1.74 6.929-4.625l53.872-129.691c1.589-3.825-.224-8.214-4.049-9.803z">
                            </path>
                            <path
                                d="m218.829 122.759c-3.824-1.589-8.214.224-9.803 4.049l-53.872 129.691c-1.589 3.825.224 8.214 4.049 9.803.94.391 1.915.576 2.874.576 2.94 0 5.731-1.74 6.929-4.625l53.872-129.691c1.589-3.825-.224-8.214-4.049-9.803z">
                            </path>
                            <path
                                d="m271.586 122.759c-3.825-1.589-8.214.224-9.803 4.049l-53.872 129.691c-1.589 3.825.224 8.214 4.049 9.803.94.391 1.915.576 2.874.576 2.94 0 5.731-1.74 6.929-4.625l53.872-129.691c1.589-3.825-.224-8.214-4.049-9.803z">
                            </path>
                        </g>
                    </svg>
                    <p> تم {{$request->type =='delivery' ? 'التوصيل':'التفريغ'}}</p>
                    <i class="fa fa-check-circle"></i>
                </li>


            </ul>
        </div>


        <div class="box-details grid-2">
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

<div class="modal fade modal-custom" data-bs-backdrop="static" id="example2" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h3>أدخل صورة الحاوية</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" id="" method="post" action="{{route('driver-requests.delivered')}}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="request_id" value="{{$request->id}}">
                            <div class="col-md-12">
                                <input type="file" name="delivered_photo" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                                    <i class="fa fa-save"></i>
                                    حفظ
                                </button>
                                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                                    data-bs-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                    خروج
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-custom" data-bs-backdrop="static" id="example3" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="card-header">
                        <h3>أدخل رقم الإيصال</h3>
                    </div>
                    <div class="card-body">
                        <form class="row" id="" method="post" action="{{route('driver-requests.discharged')}}">
                            @csrf
                            <input type="hidden" name="request_id" value="{{$request->id}}">
                            <div class="col-md-12">
                                <input type="number" name="receipt_number" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary btn-air-primary btn-icon" type="submit">
                                    <i class="fa fa-save"></i>
                                    حفظ
                                </button>
                                <button class="btn btn-danger exsit_modal btn-air-danger btn-icon" type="button"
                                    data-bs-dismiss="modal">
                                    <i class="fa fa-times"></i>
                                    خروج
                                </button>
                            </div>
                        </form>
                    </div>
                </div>




            </div>

        </div>
    </div>
</div>

@endsection
