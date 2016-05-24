@extends('layouts.master')
@section('navbar')
@section('sidebar')
@section('content')
<div class="col-md-12">
      
 <div class="page-main">
      <!-- Contacts Content Header -->
      <div class="page-header">
        <h1 class="page-title">Contact List</h1>
        <div class="page-header-actions">
          <form>
            <div class="input-search input-search-dark">
              <i class="input-search-icon md-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="" placeholder="Search...">
            </div>
          </form>
        </div>
      </div>
      <!-- Contacts Content -->
      <div class="page-content page-content-table">
        <!-- Actions -->
        <div class="page-content-actions">
          <div class="pull-right">
            <div class="dropdown">
              <button type="button" class="btn btn-pure dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false">
                More
                <span class="icon md-chevron-down" aria-hidden="true"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">More</a></li>
                <li><a href="javascript:void(0)">More</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-info btn-md empty-btn">Empty All</button>
          </div>
          <div class="btn-group btn-group-flat">
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon md-folder" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Trash</a></li>
                <li><a href="javascript:void(0)">Spam</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn btn-icon btn-pure btn-default dropdown-toggle" data-toggle="dropdown"
              aria-expanded="false" type="button"><i class="icon md-tag" aria-hidden="true"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="javascript:void(0)">work</a></li>
                <li><a href="javascript:void(0)">Family</a></li>
                <li><a href="javascript:void(0)">Private</a></li>
                <li><a href="javascript:void(0)">Friends</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Contacts -->
        <table class="table is-indent tablesaw" data-tablesaw-mode="stack" data-plugin="animateList"
        data-animate="fade" data-child="tr" data-selectable="selectable">
          <thead>
            <tr>
              <th class="pre-cell"></th>
              <th class="cell-30" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">
                <span class="checkbox-custom checkbox-primary checkbox-lg contacts-select-all">
                  <input type="checkbox" class="contacts-checkbox selectable-all" id="select_all"
                  />
                  <label for="select_all"></label>
                </span>
              </th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Name</th>
              <th class="cell-300" scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">Phone</th>
              <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Email</th>
              <th class="suf-cell"></th>
            </tr>
          </thead>
          <tbody>
                <!--แสดงลิสต์รายการ-->     
            <tr data-url="{{asset('assets/template/panel.tpl')}}" data-toggle="slidePanel">
              <td class="pre-cell"></td>
              <td class="cell-30">
                <span class="checkbox-custom checkbox-primary checkbox-lg">
                  <input type="checkbox" class="contacts-checkbox selectable-item" id="contacts_1"
                  />
                  <label for="contacts_1"></label>
                </span>
              </td>
              <td class="cell-300">
                <a class="avatar" href="javascript:void(0)">
                  <img class="img-responsive" src="{{asset('assets/template/global/portraits/1.jpg')}}" alt="...">
                </a>
                Herman Beck
              </td>
              <td class="cell-300">(119)-298-8025</td>
              <td>julio.williamson73@gmail.com</td>
              <td class="suf-cell"></td>
            </tr>
                <!--/แสดงลิสต์รายการ-->     
        
          </tbody>
        </table>
        <ul data-plugin="paginator" data-total="50" data-skin="pagination-gap"></ul>
      </div>
    </div>
  </div>
  <!-- Site Action -->
  <div class="site-action">
    <button type="button" class="site-action-toggle btn-raised btn btn-success btn-floating">
      <i class="front-icon md-plus animation-scale-up" aria-hidden="true"></i>
      <i class="back-icon md-close animation-scale-up" aria-hidden="true"></i>
    </button>
    <div class="site-action-buttons">
      <button type="button" data-action="trash" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-delete" aria-hidden="true"></i>
      </button>
      <button type="button" data-action="folder" class="btn-raised btn btn-success btn-floating animation-slide-bottom">
        <i class="icon md-folder" aria-hidden="true"></i>
      </button>
    </div>
  </div>
  <!-- End Site Action -->
  <!-- Add User Form -->
  <div class="modal fade" id="addUserForm" aria-hidden="true" aria-labelledby="addUserForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Create New Contact</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" placeholder="Phone" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Email" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="birthday" placeholder="Birthday"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
          <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add User Form -->
  <!-- Add Label Form -->
  <div class="modal fade" id="addLabelForm" aria-hidden="true" aria-labelledby="addLabelForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Add New Label</h4>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="text" class="form-control" name="lablename" placeholder="Label Name"
              />
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Save</button>
          <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
    <!-- End Add Label Form -->
</div>
@endsection
