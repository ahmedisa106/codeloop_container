@extends('admin.layouts.master')
@section('content')
    <div class="row">

        <div class="col-sm-6 col-xl-3 col-lg-6">
            <a href="{{route('companies.index')}}">
                <div class="card bg-1">
                    <div class="card-body">
                        <div class="media static-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">المؤسسات</h6>
                                <h4 class="mb-0 counter">{{$companies_count}}</h4>
                            </div>
                            <img src="{{asset('assets/dashboard')}}/images/icons/building.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-sm-6 col-xl-3 col-lg-6">
            <a href="{{route('services.index')}}">

                <div class="card bg-2">
                    <div class="card-body">
                        <div class="media static-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">الخدمات</h6>
                                <h4 class="mb-0 counter">{{$services_count}}</h4>
                            </div>
                            <img src="{{asset('assets/dashboard')}}/images/icons/customer-service2.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-sm-6 col-xl-3 col-lg-6">
            <a href="{{route('blogs.index')}}">
                <div class="card bg-3">
                    <div class="card-body">
                        <div class="media static-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">المقالات</h6>
                                <h4 class="mb-0 counter">{{$blogs_count}}</h4>
                            </div>
                            <img src="{{asset('assets/dashboard')}}/images/icons/content.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="col-sm-6 col-xl-3 col-lg-6">
            <a href="{{route('packages.index')}}">
                <div class="card bg-4">
                    <div class="card-body">
                        <div class="media static-widget">
                            <div class="media-body">
                                <h6 class="font-roboto">الباقات</h6>
                                <h4 class="mb-0 counter">{{$packages_count}}</h4>
                            </div>
                            <img src="{{asset('assets/dashboard')}}/images/icons/discount-badge.png" alt="">
                        </div>
                    </div>
                </div>
            </a>
        </div>


    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h3>المؤسسات</h3>
                </div>
                <div class="card-body pt-0">
                    <div id="chartone" class="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-header border-bottom-0">
                    <h3>الإشتراكات</h3>
                </div>
                <div class="card-body pt-0">
                    <div id="chart4" class="chart"></div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="card">--}}
    {{--        <div class="card-header border-bottom-0">--}}
    {{--            <h3>الإشتراكات</h3>--}}
    {{--        </div>--}}
    {{--        <div class="card-body">--}}
    {{--            <div class="row">--}}
    {{--                --}}{{--                <div class="col-md-6">--}}
    {{--                --}}{{--                    <div id="chart3" class="chart"></div>--}}
    {{--                --}}{{--                </div>--}}
    {{--                <div class="col-md-6">--}}


    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection

@push('js')
    <script>
        var myChart = echarts.init(document.getElementById('chartone'));
        option = {
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'shadow'
                },
                textStyle: {
                    fontFamily: 'Bahij_Plain'
                }
            },
            grid: {
                top: "9%",
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            xAxis: [{
                data: {!! $month_list !!},
                axisLabel: {
                    textStyle: {
                        fontSize: 14,
                        fontFamily: 'Bahij_Plain'
                    }
                }
            }],
            yAxis: [{
                type: 'value'
            }],
            series: [{
                name: 'المؤسسات',
                type: 'bar',
                barWidth: '45%',
                data: [
                        @foreach($companies_list as $index => $package)
                    {
                        value: {{$package['count']}},
                        itemStyle: {
                            color: '{{$package['color']}}'
                        }
                    },
                    @endforeach



                ]
            }]
        };
        myChart.setOption(option);
    </script>


    <script>
        var myChart = echarts.init(document.getElementById('chart4'));
        var colorPalette = ['#FFAB40', '#41C4FF', '#FF4081'];
        option = {
            tooltip: {
                trigger: 'item',
                textStyle: {
                    fontFamily: 'Bahij_Plain'
                }
            },
            series: [{
                type: 'pie',
                radius: ['40%', '70%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 10,
                    borderColor: '#fff',
                    borderWidth: 2
                },
                label: {
                    textStyle: {
                        fontFamily: 'Bahij_Plain',
                        fontSize: '20'
                    }
                },
                emphasis: {
                    label: {
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: true
                },
                data: {!! $packages !!},
                color: colorPalette
            }],
            graph: {
                color: colorPalette
            }
        };
        myChart.setOption(option);
    </script>

@endpush
