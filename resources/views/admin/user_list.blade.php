@extends('admin.layouts.app')
@section ('title') User List - Admin Dashboard @endsection 
@section('content')
  
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="users-list-wrapper">
                    <div class="users-list-filter px-1">
                        <form>
                            <div class="row border border-light rounded py-2 mb-2">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-verified">Verified</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-verified">
                                            <option value="">Any</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-role">Role</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-role">
                                            <option value="">Any</option>
                                            <option value="User">User</option>
                                            <option value="Staff">Staff</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="users-list-status">Status</label>
                                    <fieldset class="form-group">
                                        <select class="form-control" id="users-list-status">
                                            <option value="">Any</option>
                                            <option value="Active">Active</option>
                                            <option value="Close">Close</option>
                                            <option value="Banned">Banned</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                                    <button class="btn btn-block btn-primary glow">Show</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- datatable start -->
                                    <div class="table-responsive">
                                        <table id="users-list-datatable" class="table">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>username</th>
                                                    <th>name</th>
                                                    <th>last activity</th>
                                                    <th>verified</th>
                                                    <th>role</th>
                                                    <th>status</th>
                                                    <th>edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>300</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">dean3004</a>
                                                    </td>
                                                    <td>Dean Stanley</td>
                                                    <td>30/04/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>301</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">zena0604</a>
                                                    </td>
                                                    <td>Zena Buckley</td>
                                                    <td>06/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>302</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">delilah0301</a>
                                                    </td>
                                                    <td>Delilah Moon</td>
                                                    <td>03/01/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>303</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">hillary1807</a>
                                                    </td>
                                                    <td>Hillary Rasmussen</td>
                                                    <td>18/07/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>304</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">herman2003</a>
                                                    </td>
                                                    <td>Herman Tate</td>
                                                    <td>20/03/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>305</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">kuame3008</a>
                                                    </td>
                                                    <td>Kuame Ford</td>
                                                    <td>30/08/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>306</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">fulton2009</a>
                                                    </td>
                                                    <td>Fulton Stafford</td>
                                                    <td>20/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>307</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">piper0508</a>
                                                    </td>
                                                    <td>Piper Jordan</td>
                                                    <td>05/08/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>308</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">neil1002</a>
                                                    </td>
                                                    <td>Neil Sosa</td>
                                                    <td>10/02/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>309</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">caldwell2402</a>
                                                    </td>
                                                    <td>Caldwell Chapman</td>
                                                    <td>24/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>310</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">wesley0508</a>
                                                    </td>
                                                    <td>Wesley Oneil</td>
                                                    <td>05/08/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>311</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">tallulah2009</a>
                                                    </td>
                                                    <td>Tallulah Fleming</td>
                                                    <td>20/09/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>312</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">iris2505</a>
                                                    </td>
                                                    <td>Iris Maddox</td>
                                                    <td>25/05/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>313</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">caleb1504</a>
                                                    </td>
                                                    <td>Caleb Bradley</td>
                                                    <td>15/04/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>314</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">illiana0410</a>
                                                    </td>
                                                    <td>Illiana Grimes</td>
                                                    <td>04/10/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>315</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">chester0902</a>
                                                    </td>
                                                    <td>Chester Estes</td>
                                                    <td>09/02/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>316</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">gregory2309</a>
                                                    </td>
                                                    <td>Gregory Hayden</td>
                                                    <td>23/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>317</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">jescie1802</a>
                                                    </td>
                                                    <td>Jescie Parker</td>
                                                    <td>18/02/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>318</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">sydney3101</a>
                                                    </td>
                                                    <td>Sydney Cabrera</td>
                                                    <td>31/01/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>319</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">gray2702</a>
                                                    </td>
                                                    <td>Gray Valenzuela</td>
                                                    <td>27/02/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-warning">Close</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>320</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">hoyt0305</a>
                                                    </td>
                                                    <td>Hoyt Ellison</td>
                                                    <td>03/05/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>321</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">damon0209</a>
                                                    </td>
                                                    <td>Damon Berry</td>
                                                    <td>02/09/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>322</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">kelsie0511</a>
                                                    </td>
                                                    <td>Kelsie Dunlap</td>
                                                    <td>05/11/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-warning">Close</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>323</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">abel1606</a>
                                                    </td>
                                                    <td>Abel Dunn</td>
                                                    <td>16/06/2020</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>324</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">nina2208</a>
                                                    </td>
                                                    <td>Nina Byers</td>
                                                    <td>22/08/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-warning">Close</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>325</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">erasmus1809</a>
                                                    </td>
                                                    <td>Erasmus Walter</td>
                                                    <td>18/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>326</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">yael2612</a>
                                                    </td>
                                                    <td>Yael Marshall</td>
                                                    <td>26/12/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-warning">Close</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>327</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">thomas2012</a>
                                                    </td>
                                                    <td>Thomas Dudley</td>
                                                    <td>20/12/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>328</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">althea2810</a>
                                                    </td>
                                                    <td>Althea Turner</td>
                                                    <td>28/10/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>329</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">jena2206</a>
                                                    </td>
                                                    <td>Jena Schroeder</td>
                                                    <td>22/06/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>330</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">hyacinth2201</a>
                                                    </td>
                                                    <td>Hyacinth Maxwell</td>
                                                    <td>22/01/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>331</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">madeson1907</a>
                                                    </td>
                                                    <td>Madeson Byers</td>
                                                    <td>19/07/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>332</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">elmo0707</a>
                                                    </td>
                                                    <td>Elmo Tran</td>
                                                    <td>07/07/2020</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>333</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">shelley0309</a>
                                                    </td>
                                                    <td>Shelley Eaton</td>
                                                    <td>03/09/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>334</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">graham0301</a>
                                                    </td>
                                                    <td>Graham Flores</td>
                                                    <td>03/01/2019</td>
                                                    <td>No</td>
                                                    <td>Staff</td>
                                                    <td><span class="badge badge-danger">Banned</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>335</td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-view.html">erasmus2110</a>
                                                    </td>
                                                    <td>Erasmus Mclaughlin</td>
                                                    <td>21/10/2019</td>
                                                    <td>Yes</td>
                                                    <td>User </td>
                                                    <td><span class="badge badge-success">Active</span></td>
                                                    <td><a href="../../../html/ltr/vertical-menu-template/page-users-edit.html"><i class="feather icon-edit-1"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- datatable ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection