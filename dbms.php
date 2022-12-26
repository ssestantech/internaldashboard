<?php include('head.php') ?>
<?php include('sidebar.php') ?>
<header class="header">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="toggle-menu">
            <span></span><span></span><span></span>
        </div>
        <div class="title">DBMS</div>
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
            <div class="heading">DBMS</div>
            <!-- <div class="toggle-layout" data-id="list-view"><img src="images/layout-toggle.png" alt="Layout Toggle"></div> -->
        </div>

        <div class="grid-view dbms">
            <ul class="d-flex flex-wrap">
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/database.png" width="38" alt="Database"></div>
                        <div class="desc">
                            <div class="full-name">Database 01</div>
                            <div class="date">SQL R1W009558H3</div>
                        </div>
                        <div class="button-wrapper">
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>CPU</label>
                                <div class="btn-database btn-database-red">2</div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>Memory</label>
                                <div class="btn-database btn-database-orange">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Server</td>
                                <td>SQL R1W0095</td>
                            </tr>
                            <tr>
                                <td>Firewall</td>
                                <td>Circuit-Level</td>
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
                        <div class="image"><img src="images/database.png" width="38" alt="Database"></div>
                        <div class="desc">
                            <div class="full-name">Database 01</div>
                            <div class="date">SQL R1W009558H3</div>
                        </div>
                        <div class="button-wrapper">
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>CPU</label>
                                <div class="btn-database btn-database-red">2</div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>Memory</label>
                                <div class="btn-database btn-database-orange">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Server</td>
                                <td>SQL R1W0095</td>
                            </tr>
                            <tr>
                                <td>Firewall</td>
                                <td>Circuit-Level</td>
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
                        <div class="image"><img src="images/database.png" width="38" alt="Database"></div>
                        <div class="desc">
                            <div class="full-name">Database 01</div>
                            <div class="date">SQL R1W009558H3</div>
                        </div>
                        <div class="button-wrapper">
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>CPU</label>
                                <div class="btn-database btn-database-red">2</div>
                            </div>
                            <div class="d-flex flex-wrap align-items-center field">
                                <label>Memory</label>
                                <div class="btn-database btn-database-orange">2</div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Server</td>
                                <td>SQL R1W0095</td>
                            </tr>
                            <tr>
                                <td>Firewall</td>
                                <td>Circuit-Level</td>
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

        <div class="table-wrapper mb-4">
            <table class="table pending-data">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Server</th>
                        <th>Firewall</th>
                        <th>Gateway</th>
                        <th>Wait Time</th>
                        <th>Memory</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Database 01</td>
                        <td>Packet Filtering</td>
                        <td>VPN</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #05B171;"></span></div></td>
                        <td>22 MB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Database 02</td>
                        <td>Circuit-Level</td>
                        <td>NAT</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #BB1318;"></span></div></td>
                        <td>56 MB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Database 03</td>
                        <td>NGFW</td>
                        <td>DHCP</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #E6AA2B;"></span></div></td>
                        <td>1 GB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Database 04</td>
                        <td>Packet Filtering</td>
                        <td>VPN</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #05B171;"></span></div></td>
                        <td>99 MB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Database 05</td>
                        <td>Circuit-Level</td>
                        <td>DHCP</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #BB1318;"></span></div></td>
                        <td>2 MB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Database 06</td>
                        <td>NGFW</td>
                        <td>NAT</td>
                        <td><div class="in-stock"><span style="width: 70%; background: #05B171;"></span></div></td>
                        <td>12 MB</td>
                        <td><a href="#" class="btn btn-primary view">View</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="white-box-wraper mb-4">
            <div class="graph"><img src="images/graph-dbms.jpg" alt="DBMS Graph"></div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>