<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nisshinbo Micro Devices</title>
    <link rel="stylesheet" href="../admin/css/style.css">
    <link rel="stylesheet" href="../fontawesome-free-6.4.0-web/css/all.css" />
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="../admin/img/nisdt_logo301.png" alt="logo">
                    <h6>Nisshinbo Micro Device (Thailand) Co.,Ltd.</h6>
                </div>
                <div class="close" id="close-btn">
                    <span class="fa-solid fa-xmark"></span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#" class="select" onclick="list(1)">
                    <span class="fa-solid fa-list"></span>
                    <h3>List</h3>
                </a>
                <a href="#" class="select" onclick="list(2)">
                    <span class="fa-solid fa-cart-plus"></span>
                    <h3>Product</h3>
                </a>
                <a href="#" class="select" onclick="list(3)">
                    <span class="fa-solid fa-store"></span>
                    <h3>Store</h3>
                </a>
                <a href="#" class="select" onclick="list(4)">
                    <span class="fa-solid fa-users-line"></span>
                    <h3>Member</h3>
                </a>
                <a href="#" class="select" onclick="list(5)">
                    <span class="fa-solid fa-chart-simple"></span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#" class="select" onclick="list(6)">
                    <span class="fa-solid fa-right-from-bracket"></span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End aside -->

        <main>
            <h1>Dashboard</h1>
            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="fa-solid fa-chart-line"></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$250,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted"> Last 24 Hours</small>
                </div>
                <!-- end of sales -->
                <div class="expenses">
                    <span class="fa-solid fa-chart-line"></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$250,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted"> Last 24 Hours</small>
                </div>
                <!-- end of expenses -->
                <div class="income">
                    <span class="fa-solid fa-chart-line"></span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$250,000</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted"> Last 24 Hours</small>
                </div>
                <!-- end of income -->
            </div>
            <!-- end of insights -->
            <div class="recent-order">
                <h2>Recent Order</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Product Number</th>
                            <th>Payment</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Foldable Mini Drome</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drome</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Primary">Details</td>
                        </tr>
                        <tr>
                            <td>Foldable Mini Drome</td>
                            <td>85631</td>
                            <td>Due</td>
                            <td class="warning">Pending</td>
                            <td class="Primary">Details</td>
                        </tr>
                    </tbody>
                </table>
                <a href="#">Show All</a>
            </div>
        </main>
        <!-- End of main -->

        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="fa-solid fa-bars"></span>
                </button>
                <div class="theme-toggler">
                    <span class="fa-regular fa-sun active-theme"></span>
                    <span class="fa-solid fa-moon"></span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Anantrakul</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="img/anan.png" alt="">
                    </div>
                </div>
            </div>
            <!-- End of top -->
            <div class="recent-updates">
                <h2>Recent Update</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/anan.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>User User</b>recived his oder of Night lion tech tech GPS drone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/anan.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>User User</b>recived his oder of Night lion tech tech GPS drone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="img/anan.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>User User</b>recived his oder of Night lion tech tech GPS drone</p>
                            <small class="text-muted">2 minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of recent updates -->
            <div class="sales-analytics">
                <h2>Sales Analytics</h2>
                <div class="item online">
                    <div class="icon">
                        <span class="fa-solid fa-cart-shopping"></span>
                    </div>
                    <div class="right">
                        <div class="ingo">
                            <h3>ONLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="sucess">+39%</h5>
                        <h3>3849</h3>
                    </div>
                </div>
                <div class="item offline">
                    <div class="icon">
                        <span class="fa-solid fa-bag-shopping"></span>
                    </div>
                    <div class="right">
                        <div class="ingo">
                            <h3>OFLINE ORDERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="danger">-17%</h5>
                        <h3>1100</h3>
                    </div>
                </div>
                <div class="item customers">
                    <div class="icon">
                        <span class="fa-solid fa-user"></span>
                    </div>
                    <div class="right">
                        <div class="ingo">
                            <h3>NEW CUSTOMERS</h3>
                            <small class="text-muted">Last 24 Hours</small>
                        </div>
                        <h5 class="sucess">+25%</h5>
                        <h3>849</h3>
                    </div>
                </div>
                <div class="item add-product">
                    <span class="fa-sharp fa-solid fa-plus"></span>
                    <h3>Add Product</h3>
                </div>
            </div>
        </div>
    </div>
    <script src="../admin/js/script.js"></script>
</body>

</html>