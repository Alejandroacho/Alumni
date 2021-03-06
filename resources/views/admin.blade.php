@extends('layouts.adminlte')

@section('content')

 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-3 text-dark">Panel de Control</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary">
              <div class="card card-outline box-profile ">
                    <div class="text-center pt-4">
                        <img class="profile-user-img img-fluid img-circle"
                            src="https://avatars3.githubusercontent.com/u/61828943?s=460&v=4"
                            alt="User profile picture" >
                    </div>

                    <h3 class="profile-username text-center">{{Auth::user()->name }}</h3>

                    <p class="text-muted text-center">
                        @isset (Auth::user()->roles[0]->name)
                            {{Auth::user()->roles[0]->name}}
                        @endisset
                    </p>

                    <!--<strong><i class="fas fa-book mr-1"></i>email</strong>-->

                    <p class="text-muted text-center">{{Auth::user()->email }}</p>

                    <hr>
                   
                    <a href="{{route('user.edit', Auth::user()->id)}}" class="btn btn-primary btn-block bg-orange"><b>Editar</b></a>
                    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <div class="card card-primary">
              <div class="mx-4 my-4">
                <h5 class="">Perfil de usuario</h5>
                @isset(Auth::user()->profile->id)
                <div class="my-3">
                  <strong><i class="fas fa-book mr-2"></i>Nickname</strong>
                  <p class="text-muted">{{Auth::user()->profile->nickname}}</p>
                </div>
                  <strong><i class="fas fa-map-marker-alt mr-2"></i>Web</strong>
                  <p class="text-muted">{{Auth::user()->profile->web}}</p>
                <div class="my-3">
                  <strong><i class="fas fa-book mr-2"></i>Description</strong>
                  <p class="text-muted">{{Auth::user()->profile->aboutme}}</p>
                </div>
                <div class="my-3">
                  <strong><i class="fas fa-book mr-2"></i>Social</strong>
                  <p class="text-muted">{{Auth::user()->profile->social}}</p>
                </div> 

                <div class="">
                  <strong><i class="fas fa-pencil-alt mr-2"></i> Skills</strong>
                  <p class="text-muted">
                    <span class="tag">UI Design</span>
                    <span class="tag">Coding</span>
                    <span class="tag">Javascript</span>
                    <span class="tag">PHP</span>
                    <span class="tag">Node.js</span>
                  </p>
                </div>

                  <hr>
                  
                  <strong><i class="fas fa-file-alt mr-1"></i> Notes</strong>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                  
                  
                  @endisset
                </div>
              </div>
            </div>

            
          <!-- /.col -->
          <div class="col-md-9">

          <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>Empleo</h3>

                        <p>Empleo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="{{Route('jobOffers.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                <div class="inner">
                    @inject('events', 'App\Event')
                    <h3>{{$events->count()}}</h3>
                    <p>Eventos</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="{{route('event.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>Proyectos</h3>
                        <p>Proyectos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-document"></i>
                    </div>
                    <a href="{{Route('projects.index')}}" class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-orange">
                    <div class="inner">
                        <h3>Empresas</h3>
                        <p>Empresas</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-laptop"></i>
                    </div>
                    <a href="{{route('empresa.index')}}"  class="small-box-footer">Más info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
    </div> 

            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills ">
                  <li class="nav-item"><a class="nav-link active bg-orange" href="#activity" data-toggle="tab">Usuarios</a></li>
                  <li class="nav-item"><a class="nav-link " href="#role" data-toggle="tab">Roles de Usuario</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    @include('custom.message')
                      <!-- /Usuarios-->
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alumni-Acceso</th>
                            <th scope="col">Rol</th>
                            <th colspan="3"></th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->access}}</td>
                                    <td>
                                        @foreach($user->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td>
                                        @can('view',[$user, ['user.show','userown.show'] ])
                                        <a class="btn btn-warning bg-orange" href="{{route('user.show', $user->id)}}">
                                          <i class="nav-icon fas fa-eye"></i>
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('view', [$user, ['user.edit','userown.edit'] ])
                                        <a class="btn btn-warning bg-orange" href="{{route('user.edit', $user->id)}}">
                                          <i class="nav-icon fas fa-edit "></i>
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('haveaccess','user.destroy')
                                            <form action="{{route('user.destroy', $user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning bg-orange">
                                                  <i class="nav-icon fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="role">

                  <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Full access</th>
                            </tr>
                            </thead>
                            <tbody>


                                @foreach ($roles as $role)
                                    <tr>
                                        <th scope="row">{{$role->id}}</th>
                                        <td>{{$role->name}}</td>
                                        <td>{{$role->slug}}</td>
                                        <td>{{$role->description}}</td> 
                                        <td>{{$role['full-access']}}</td> 
                                        <td>
                                        @can('haveaccess','role.show')
                                            <a class="btn btn-warning bg-orange" href="{{route('role.show', $role->id)}}">
                                                <i class="nav-icon fas fa-eye"></i>
                                            </a>
                                        @endcan
                                        </td>
                                        <td>
                                        @can('haveaccess','role.edit')
                                            <a class="btn btn-warning bg-orange" href="{{route('role.edit', $role->id)}}">
                                                <i class="nav-icon fas fa-edit "></i>
                                            </a>
                                        @endcan
                                        </td>
                                        <td>
                                        @can('haveaccess','role.destroy')
                                            <form action="{{route('role.destroy', $role->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-warning bg-orange">
                                                    <i class="nav-icon fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        @endcan

                                        </td>

                                    </tr>                    
                                @endforeach                          
                            </tbody>
                        </table>


                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>  

</div> 



@endsection

