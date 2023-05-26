@extends('layouts.main')

@section('content')
<?php
if(auth()->user()->role == 'Produser'):?>
  @include('page.revenue.components.revenueList')
 <?php endif;?>
 <?php
if(auth()->user()->role == 'Admin Sosmed'):?>
  @include('page.revenue.components.revenueList')
 <?php endif;?>
 <?php
if(auth()->user()->role == 'Admin Keuangan'):?>
  @include('page.revenue.components.revenueList')
 <?php endif;?>
 <?php
if(auth()->user()->role == 'Super Admin'):?>
  @include('page.revenue.components.revenueList')
 <?php endif;?>


<?php
if(auth()->user()->role == 'User'):?>
@include('page.revenue.components.personalRevenueList')
 <?php endif;?>

 <?php
if(auth()->user()->role == 'Admin Finance'):?>
  @include('page.revenue.components.revenueList')

@include('page.revenue.components.allRevenueList')

 <?php endif;?>

 <?php
if(auth()->user()->role == 'Admin Sosmed'):?>
@include('page.revenue.components.allRevenueList')
 <?php endif;?>

 <?php
if(auth()->user()->role == 'Super Admin'):?>
@include('page.revenue.components.allRevenueList')
 <?php endif;?>

 <?php
if(auth()->user()->role == 'Super Admin'):?>
@include('page.revenue.components.personalRevenueList')
 <?php endif;?>

 <?php
if(auth()->user()->role == 'Admin Finance'):?>
@include('page.revenue.components.personalRevenueList')
 <?php endif;?>




@endsection
