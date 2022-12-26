<?php include('head.php') ?>
<?php include('sidebar.php') ?>
<header class="header">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="toggle-menu">
            <span></span><span></span><span></span>
        </div>
        <div class="title">REST APIs</div>
        <div class="notification">
            <div class="icon">
                <img src="images/notification.png" alt="Notification">
                <span>2</span>
            </div>
        </div>
        <div class="d-flex flex-wrap user-header">
            <div class="image"><img src="images/user.png" alt="User"></div>
            <div class="desc">
                <div class="name">Rajesh Sharma</div>
                <div class="user-id">User ID 007</div>
            </div>
        </div>
    </div>
</header>
<div class="main-container">
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between sub-header">
            <div class="heading">REST APIs</div>
            <div class="toggle-layout" data-id="list-view"><img src="images/layout-toggle.png" alt="Layout Toggle"></div>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center form-wrapper form-header">
            <div class="data-filter-form">
                <form>
                    <div class="form-inline">
                        <select class="form-control sort-by">
                            <option selected>Sort by</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="form-control pager">
                            <option selected>9</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="search-form">
                <form>
                    <div class="form-inline">
                        <input type="text" placeholder="Search here" class="form-control">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </form>
            </div>
            <div class="table-right">
                <a href="#" class="button export">Export <img src="images/download.png" alt="Export"></a>
            </div>
        </div>
        <div class="list-view" id="list-view">
            <div class="table-wrapper">
                <table class="table restapi-data">
                    <thead>
                        <tr>
                            <th><input type="checkbox" class=""></th>
                            <th>#</th>
                            <th class="name-field">Name</th>
                            <th>Start Date</th>
                            <th>Performance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>1</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>2</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>3</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 pending-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>4</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #2BCBBA;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>5</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>6</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>7</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 pending-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" class=""></td>
                            <td>8</td>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">P1</div><div class="full-name">Polarized Blue</div></div></td>
                            <td>03/08/2018</td>
                            <td><div class="in-stock-wrap"><em>45%</em><div class="in-stock2"><span style="width: 45%;"></span></div></div></td>
                            <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid-view" id="grid-view">
            <ul class="d-flex flex-wrap">
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #25C2E3;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #9932E7;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 pending-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #FAAE42;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #25C2E3;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #9932E7;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 pending-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #FAAE42;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #25C2E3;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #9932E7;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 pending-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #FAAE42;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #25C2E3;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #9932E7;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 pending-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="short-name" style="background-color: #FAAE42;">P1</div>
                        <div class="desc">
                            <div class="full-name">Polarized Blue</div>
                            <div class="date">03/08/2022</div>
                        </div>
                        <div class="btn-status2 closed-1">Closed</div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Start Date</td>
                                <td>03/08/2022</td>
                            </tr>
                            <tr>
                                <td>Platform</td>
                                <td>Visual</td>
                            </tr>
                            <tr>
                                <td>Performance</td>
                                <td>45%</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>Closed</td>
                            </tr>
                        </table>
                    </div>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center custom-pager">
            <div class="showing-entry">Showing 9 to 9 of 12 entries</div>
            <div class="custom-pager-list">
                <ul>
                    <li class="prev"><a href="#"></a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">10</a></li>
                    <li class="next"><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>