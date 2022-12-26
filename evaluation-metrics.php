<?php include('head.php') ?>
<?php include('sidebar.php') ?>
<header class="header">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="toggle-menu">
            <span></span><span></span><span></span>
        </div>
        <div class="title">Evaluation Metrics</div>
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
        <div class="table-wrapper mb-4">
            <div class="d-flex flex-wrap justify-content-between table-header pl-3">
                <div class="heading">Clients</div>
                <div class="table-right">
                    <a href="#" class="button export">Export <img src="images/download.png" alt="Export"></a>
                </div>
            </div>
            <table class="table pending-data">
                <thead>
                    <tr>
                        <th class="name-field">Clients Name</th>
                        <th>Join Date</th>
                        <th>Location</th>
                        <th class="text-center">Current Inventory</th>
                        <th class="text-center">Incoming Inventory</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status canceled-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status paused-1">Paused</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                        <td>12 July 2005</td>
                        <td>New Delhi</td>
                        <td class="text-center">64,646</td>
                        <td class="text-center">12,646</td>
                        <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-wrapper mb-4">
            <div class="d-flex flex-wrap justify-content-between table-header pl-3">
                <div class="heading">Pipeline</div>
                <div class="table-right">
                    <a href="#" class="button export">Export <img src="images/download.png" alt="Export"></a>
                </div>
            </div>
            <table class="table pending-data">
                <thead>
                    <tr>
                        <th><input type="checkbox" class=""></th>
                        <th>#</th>
                        <th class="name-field">Name</th>
                        <th>Start Date</th>
                        <th>Platform</th>
                        <th>Performance</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>1</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M1</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Coder</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>2</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">M2</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>3</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">M3</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Coder</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 pending-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>4</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #2BCBBA;">M4</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>5</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">M5</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Coder</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>6</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">M6</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>7</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M7</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 pending-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>8</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M8</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Coder</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status2 closed-1">Closed</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-wrapper mb-4">
            <div class="d-flex flex-wrap justify-content-between table-header pl-3">
                <div class="heading">Models</div>
                <div class="table-right">
                    <a href="#" class="button export">Export <img src="images/download.png" alt="Export"></a>
                </div>
            </div>
            <table class="table pending-data">
                <thead>
                    <tr>
                        <th><input type="checkbox" class=""></th>
                        <th>#</th>
                        <th class="name-field">Name</th>
                        <th>Start Date</th>
                        <th>Platform</th>
                        <th>Performance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>1</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M1</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>2</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">M2</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>3</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">M3</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>4</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #2BCBBA;">M4</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>5</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #FAAE42;">M5</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>6</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #9932E7;">M6</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>7</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M7</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class=""></td>
                        <td>8</td>
                        <td><div class="d-flex flex-wrap align-items-center"><div class="short-name" style="background-color: #25C2E3;">M8</div><div class="full-name">Polarized Blue</div></div></td>
                        <td>03/08/2018</td>
                        <td>Visual</td>
                        <td>α × β = (c / a)</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include('footer.php') ?>