 <style>
                #fs-login>li{
                    font-size: 20px
                }
                #fs-login>li>a{
                    padding: 10px
                }
            </style>
            
            <div class="card shadow-sm px-1 m-4 position-relative pb-4">
                <p class="text-center text-muted p-3">
                    login cepat dengan
                </p>
                <ul id="fs-login" class="list-group list-group-horizontal m-0 m-auto">
                    <li class="list-group-item mx-2 border-0">
                        <a href="{{$facebook}}" class="font-weight-bold">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    
                    <li class="list-group-item mx-2 border-0">
                    <a href="{{$github}}" class="font-weight-bold">
                            <i class="fa fa-github" aria-hidden="true"></i>
                        </a>
                    </li>
                    
                    <li class="list-group-item mx-2 border-0">
                        <a href="{{$google}}" class="font-weight-bold">
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </a>
                    </li>
                    
                    <li class="list-group-item mx-2 border-0">
                        <a href="{{$twitter}}" class="font-weight-bold">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                    </li>

                </ul>
            </div>