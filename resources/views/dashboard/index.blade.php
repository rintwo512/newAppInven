@extends('template.main')

@section('content')
<div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Like</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 7000</p>
                <p class="fs-12">48% Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <i class="fa fa-heart"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>New Orders</h6>
                <p class="ms-card-change"> 100</p>
                <p class="fs-12">60% Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <i class="fa fa-laptop"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-warning ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Users Regisration</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> 5000</p>
                <p class="fs-12">48% Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <i class="fa fa-user"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-info ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Visitor</h6>
                <p class="ms-card-change"> 65</p>
                <p class="fs-12">10% Lorem, ipsum dolor sit amet.</p>
              </div>
            </div>
            <i class="fa fa-sync-alt"></i>
          </div>
        </div>

       
      </div>
@endsection