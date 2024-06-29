@extends('layout')

@section('content')
<div id="orders" class="my-4">
    <div class="card">
        <div class="card-header">
            Orders
        </div>
        <div class="card-body table-responsive">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#orderModal">Add Order</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Order rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="products" class="my-4">
    <div class="card">
        <div class="card-header">
            Products
        </div>
        <div class="card-body table-responsive">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#productModal">Add Product</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Product rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="customers" class="my-4">
    <div class="card">
        <div class="card-header">
            Customers
        </div>
        <div class="card-body table-responsive">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#customerModal">Add Customer</button>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Customer rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="purchases" class="my-4">
    <div class="card">
        <div class="card-header">
            All Purchases
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Customer</th>
                        <th>Date</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Purchase rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="stock-alerts" class="my-4">
    <div class="card">
        <div class="card-header">
            Stock Alerts
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Stock Level</th>
                        <th>Alert Level</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Stock alert rows go here -->
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
