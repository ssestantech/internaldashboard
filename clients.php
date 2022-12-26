<?php include('head.php') ?>
<?php include('sidebar.php') ?>
<header class="header">
    <div class="container-fluid d-flex flex-wrap justify-content-between align-items-center">
        <div class="toggle-menu">
            <span></span><span></span><span></span>
        </div>
        <div class="title">Clients</div>
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
            <div class="heading">Clients</div>
            <div class="toggle-layout" data-id="list-view"><img src="images/layout-toggle.png" alt="Layout Toggle"></div>
        </div>

        <div class="d-flex flex-wrap justify-content-between align-items-center form-wrapper form-header">
            <div class="clients-form">
                <form>
                    <div class="form-inline">
                        <input type="text" placeholder="From" class="form-control datepicker">
                        <input type="text" placeholder="To" class="form-control datepicker">
                        <select name="" id="" class="form-control">
                            <option value="" selected>Last Month</option>
                            <option value="">Choose Month</option>
                        </select>
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
                            <th class="name-field">Clients Name</th>
                            <th>Join Date</th>
                            <th>Location</th>
                            <th>Current Inventory</th>
                            <th>Incoming Inventory</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status canceled-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status paused-1">Paused</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                        <tr>
                            <td><div class="d-flex flex-wrap align-items-center"><div class="image"><img src="images/ciz-solution.png" alt=""></div><div class="full-name">Ciz Solution PVT</div></div></td>
                            <td>12 July 2005</td>
                            <td>New Delhi</td>
                            <td>64,646</td>
                            <td>12,646</td>
                            <td><div class="btn btn-primary btn-status active-1">Closed</div></td>
                            <td><a href="#" class="btn btn-primary view">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="grid-view clients" id="grid-view">
            <ul class="d-flex flex-wrap">
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
                            </tr>
                        </table>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="" id="">
                    <div class="grid-status grid-status-close"><label>Status :</label><span>Closed</span></div>
                    <div class="d-flex flex-wrap align-items-center top">
                        <div class="image"><img src="images/ciz-solution.png" alt=""></div>
                        <div class="desc">
                            <div class="full-name">Ciz Solution PVT</div>
                            <p>Member Since: 2006</p>
                        </div>
                    </div>
                    <div class="bottom">
                        <table>
                            <tr>
                                <td>Location of the Warehouse :</td>
                                <td>Warehouse 01</td>
                            </tr>
                            <tr>
                                <td>Current Inventory :</td>
                                <td class="inventory-green">64647</td>
                            </tr>
                            <tr>
                                <td>Incoming Inventory :</td>
                                <td class="inventory-green">8574</td>
                            </tr>
                            <tr>
                                <td>SKU:</td>
                                <td>ZSA-HFG-434</td>
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