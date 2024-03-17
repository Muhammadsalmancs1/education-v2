@extends('../admin/layout/main')

@section('content')


                <!-- Content wrapper -->
                <div class="content-wrapper px-lg-3 px-0">
                    <!-- Content -->


                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- <h4 class="pt-3 pb-2">Student Management</h4> -->

                        <div class="tab mb-3">
                            <div class="tab-scroll">
                                @can('Dashboards')
                                <button class="tablinks" data-tab="SD" id="defaultOpen">Student
                                    Data</button>
                                <button class="tablinks" data-tab="Appointments">Appointments</button>
                                @endcan
                            </div>

                        </div>
                        <div id="SD" class="tabcontent">
                            @can('Dashboards')
                            <div class="row">
                                <!-- <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #8d8d8d !important">
                                        <div>
                                            <a href="{{route('studentlists','')}}" class="text-white">
                                                All Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div> -->
                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #17a2b8 !important;">
                                        <div>
                                            <a href="{{route('studentlists','Inquiry')}}" class="text-white">
                                                In Query Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #28a745!important;">
                                        <div>
                                            <a href="{{route('studentlists','In Progress')}}" class="text-white">
                                                In Progress Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #193765 !important">
                                        <div>
                                            <a href="{{route('studentlists','Visa Accepted')}}" class="text-white">
                                                Visa Accepted Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #196545 !important">
                                        <div>
                                            <a href="{{route('studentlists','Cas_T20')}}" class="text-white">
                                            Visa Refused Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #a5742b !important">
                                        <div>
                                            <a href="{{route('studentlists','Paid')}}" class="text-white">
                                                Paid Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #ffc107 !important">
                                        <div>
                                            <a href="" class="text-white">
Cas/T20
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-4">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #dc3545 !important">
                                        <div>
                                            <a href="" class="text-white">
                                                Wasted Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class=" dashboard-btn  mb-3 d-flex justify-content-between align-items-center "
                                        style=" color:white !important; background-color: #000000 !important">
                                        <div>
                                            <a href="{{route('studentlists','Close')}}" class="text-white">
                                                Closed Student
                                            </a>
                                        </div>
                                        <div><i class="bi bi-arrow-right-circle-fill ms-3"></i></div>
                                    </div>
                                </div>
                            </div>
                            @endcan
                            <!-- Striped Rows -->
                            <div class="card  pb-4 px-lg-4 px-2">
                                <h5 class="card-header px-0 bg-white border-bottom-0  py-3 mb-2">New Leads</h5>

                                <div class="table-responsive">
                                    <table id="new-lead" class="table  nowrap border-0 " style="width:100%">
                                        <thead>
                                            <tr class="dt-head">

                                                <th>#</th>

                                                <th> Name </th>

                                                <th> Number</th>

                                                <th> Session </th>

                                                <th> Email</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inquiry as $key => $item)
                                            <tr class="">

                                                <td class="">{{$key+1}}</td>


                                                <td class="">{{$item->Student_name}}</td>


                                                <td class="">{{$item->Student_contact}}</td>


                                                <td class=""> {{$item->Session_Looking}}</td>

                                                <td class="">{{$item->Student_email}}</td>



                                            </tr>
                                            @endforeach
                                           
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--/ Striped Rows -->

                        </div>
                        @can('Dashboards')
                        <div id="Appointments" class="tabcontent">
                        <div class="card  pb-4 px-lg-4 px-2 mb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-header px-0 bg-white border-bottom-0  py-3 mb-2 mt-1">Today
                                        Appointments</h5>
                                </div>

                                <div class="blushed-card mb-3">
                                    <div class="table-responsive">
                                        <div id='calendar' class="dashboard-table-lg"></div>
                                    </div>
                                </div>

                            </div>
                           
                                <livewire:index />
                            </div>
                            @endcan
    @endsection
