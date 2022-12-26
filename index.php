<?php include('head.php') ?>
<?php include('sidebar.php') ?>
<header class="header">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="toggle-menu">
            <span></span><span></span><span></span>
        </div>
        <div class="title">Welcome to Stanvac AI Dashboard</div>
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
        <div class="table-wrapper">
            <div class="d-flex flex-wrap justify-content-between table-header">
                <div class="heading">Pending Tasks</div>
                <div class="table-right">
                    <a href="#" class="button export">Export <img src="images/download.png" alt="Export"></a>
                </div>
            </div>
            <table class="table pending-data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Product Code</th>
                        <th>WOS</th>
                        <th>In Stock</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#12</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#122</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 40%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Polycarbonate Blue...</td>
                        <td>#42</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 90%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#12</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status canceled-1">Canceled</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#122</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 40%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Polycarbonate Blue...</td>
                        <td>#42</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 90%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status paused-1">Paused</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#12</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#122</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 40%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Polycarbonate Blue...</td>
                        <td>#42</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 90%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#12</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 70%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Polycarbonate Polarized...</td>
                        <td>#122</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 40%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Polycarbonate Blue...</td>
                        <td>#42</td>
                        <td>------</td>
                        <td><div class="in-stock"><span style="width: 90%;"></span></div></td>
                        <td><div class="btn btn-primary btn-status active-1">Active</div></td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row stats-dashboard">
            <div class="col-md-6 col-12">
                <div class="graph-box clients">
                    <div class="head">
                        <div class="image"><img src="images/icon-clients2.png" alt=""></div>
                        <div class="desc">
                            <div class="heading">Clients</div>
                            <span>8,5746</span>
                        </div>
                        <div class="num">
                            <div class="digit">8,5746</div>
                            <span>324 <img src="images/arrow-down.png" alt=""></span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-end graph-image">
                        <div class="image"><img src="images/graph-clients.png" alt=""></div>
                        <div class="days">Last 10 Days</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="graph-box pipeline">
                    <div class="head">
                        <div class="image"><img src="images/icon-pipeline2.png" alt=""></div>
                        <div class="desc">
                            <div class="heading">Pipelines/Dockers</div>
                            <span>8,5746</span>
                        </div>
                        <div class="num">
                            <div class="digit">8,5746</div>
                            <span>324 <img src="images/arrow-down.png" alt=""></span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-end graph-image">
                        <div class="image"><img src="images/graph-pipelines.png" alt=""></div>
                        <div class="days">Last 10 Days</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="graph-box model-versions">
                    <div class="head">
                        <div class="image"><img src="images/icon-model2.png" alt=""></div>
                        <div class="desc">
                            <div class="heading">Clients</div>
                            <span>8,5746</span>
                        </div>
                        <div class="num">
                            <div class="digit">8,5746</div>
                            <span>324 <img src="images/arrow-down.png" alt=""></span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-end graph-image">
                        <div class="image"><img src="images/graph-model.png" alt=""></div>
                        <div class="days">Last 10 Days</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="graph-box metrics">
                    <div class="head">
                        <div class="image"><img src="images/icon-metric2.png" alt=""></div>
                        <div class="desc">
                            <div class="heading">Evaluation Metrics</div>
                            <span>8,5746</span>
                        </div>
                        <div class="num">
                            <div class="digit">8,5746</div>
                            <span>324 <img src="images/arrow-down.png" alt=""></span>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between align-items-end graph-image">
                        <div class="image"><img src="images/graph-metrics.png" alt=""></div>
                        <div class="days">Last 10 Days</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>