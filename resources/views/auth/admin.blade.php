@extends('layouts.master')

@section('jumbotron')

    <style>
        input[type="text"], input[type="email"], input[type="password"] {
            background-color: lightgray;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"
            integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>

    <div class="container">

        <div class="row" style="padding: 20px;">
            <div class="col-lg-6 col-12" style="padding: 5px">
                <div class="card" style="height: 515px">
                    <div style="width: 75%;">
                    <canvas id="canvas"></canvas>
                    </div>
                    <br>
                    <br>
                    <button id="randomizeData" class="btn btn-sm btn-primary">Randomize Data</button>
                    <button id="addDataset" class="btn btn-sm btn-primary">Add Dataset</button>
                    <button id="removeDataset" class="btn btn-sm btn-primary">Remove Dataset</button>
                    <button id="addData" class="btn btn-sm btn-primary">Add Data</button>
                    <button id="removeData" class="btn btn-sm btn-primary">Remove Data</button>
                    <script src="{{asset('js/chart.js')}}"></script>
                </div>
            </div>

            <div class="col-lg-6 col-12" style="padding: 5px">
                <div class="card" style="height: 515px">
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                            <i class="header-icon lnr-lighter icon-gradient bg-amy-crisp"> </i>
                            in coming text
                        </div>
                    </div>

                    <form>
                        <fieldset disabled>
                            <label for="disabledTextInput" style="display:none;">hoi</label>
                            <div class="form-group">
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="Hoi">
                            </div>

                            <label for="disabledTextInput1" style="display:none;">alles</label>
                            <div class="form-group">
                                <input type="text" id="disabledTextInput1" class="form-control" placeholder="Alles">
                            </div>

                            <label for="disabledTextInput2" style="display:none;">goed</label>
                            <div class="form-group">
                                <input type="text" id="disabledTextInput2" class="form-control" placeholder="Goed">
                            </div>

                            <label for="disabledTextInput3" style="display:none;">xD</label>
                            <div class="form-group">
                                <input type="text" id="disabledTextInput3" class="form-control" placeholder="xD">
                            </div>

                            <label for="disabledTextInput4" style="display:none;">:D</label>
                            <div class="form-group">
                                <input type="text" id="disabledTextInput4" class="form-control" placeholder=":D">
                            </div>

                            <label for="disabledTextInput5" style="display:none;">:D</label>
6                                <input type="text" id="disabledTextInput5" class="form-control" placeholder=":D">
                            </div>
                        </fieldset>
                    </form>

                    <div class="row">
                        <div class="col-9">
                            <input class="form-control form-control-lg" type="text" placeholder="Enter bericht..">
                        </div>
                        <div class="col-3">
                            <button style="margin-left: -25px" class="btn btn-warning">Send</button>
                        </div>
                    </div>
                    <div class="d-block text-center card-footer">
                        <button class="btn-shadow btn-wide btn-pill btn btn-focus">
                            <span class="badge badge-dot badge-dot-lg badge-warning badge-pulse">5..</span>
                            View Alle message
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Country</th>
                    <th scope="col">Area</th>
                    <th scope="col">inhabitants</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Russia</td>
                    <td>17,075,200</td>
                    <td>146,989,754</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>France</td>
                    <td>640,679</td>
                    <td>64,979,548</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Germany</td>
                    <td>357,114</td>
                    <td>82,114,224</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Portugal</td>
                    <td>92,090</td>
                    <td>10,329,506</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

@endsection