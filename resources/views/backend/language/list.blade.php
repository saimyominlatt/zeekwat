<x-backend>
    <div class="page-header">
        <h3 class="page-title"> language </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">languages</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <a class="btn btn-gradient-success ml-auto mb-3" href="{{route('languages.create')}}">
            <i class='bx bx-plus'></i>
        New language</a>
        <div class="col-lg-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <table id="add-row" class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>No. </th>
                            <th class="table-auto">Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                          $i=1
                        @endphp
                        @foreach($languages as $language)
                            @php
                            $id = $language->id;
                            $name = $language->name;
                            @endphp
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$name}}</td>
                            <td>

                               <a href="{{route('languages.edit',$id)}}" class="btn btn-warning">

                                <span class="btn-label">

                                    <i class="icofont-ui-settings">

                                    </i>
                                </span>

                                Edit




                               </a>


                            <form class="d-inline-block" action="{{route ('languages.destroy',$id)}}" method="POST" onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')




                                    <span>
                                    <i class="icofont-trash"></i>
                                </span>
                                   <button class="btn btn-rounded btn-gradient-danger ">Delete</button>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-backend>
<script>
    import Button from "@/Jetstream/Button";
    export default {
        components: {Button}
    }
</script>
