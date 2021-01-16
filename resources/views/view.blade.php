@extends('layouts.app')
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 5px;
        }
    
        .slidecontainer {
          width: 100%;
        }
        
        .slider {
          -webkit-appearance: none;
          width: 100%;
          height: 15px;
          border-radius: 5px;
          background: #d3d3d3;
          outline: none;
          opacity: 0.7;
          -webkit-transition: .2s;
          transition: opacity .2s;
        }
        
        .slider:hover {
          opacity: 1;
        }
        
        .slider::-webkit-slider-thumb {
          -webkit-appearance: none;
          appearance: none;
          width: 25px;
          height: 25px;
          border-radius: 50%;
          background: #4CAF50;
          cursor: pointer;
        }
        
        .slider::-moz-range-thumb {
          width: 25px;
          height: 25px;
          border-radius: 50%;
          background: #4CAF50;
          cursor: pointer;
        }
        </style>

@section('content')
        <center>

            <form class="form-horizontal" >

                <div>
                    <label for="username" class="col-md-4 control-label">Name: </label>
                    <div class="col-md-6">
                        <input id="username" type="username" class="form-control" name="username" >
                    </div>
                </div>

                <div>
                    <label for="matricno" class="col-md-4 control-label">Matric No: </label>
                    <div class="col-md-6">
                        <input id="matricno" type="matricno" class="form-control" name="matricno">
                    </div>
                </div>
                
                <div>
                    <label for="projectname" class="col-md-4 control-label">Project Name: </label>
                    <div class="col-md-6">
                        <input id="projectname" type="projectname" class="form-control" name="projectname">
                    </div>
                </div>

                <div>
                    <label for="totalmarks" class="col-md-4 control-label">Total marks: </label>
                    <div class="col-md-6">
                        <input id="totalmarks" type="totalmarks" class="form-control" name="totalmarks">
                    </div>
                </div>
        
<!--Level 1-->
            
            
                <table style="width:100%">
                    
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>Slider</th>
                        <th>% Complete</th>
                        <th>Level 1 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.1"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.1");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Research hypothesis formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.2"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.2");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Basic scientific principles observed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.3"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.3");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Physical laws and assumptions underpinning observation defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.4"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.4");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Physical laws and assumptions underpinning observation verified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.5"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.5");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Basic elements of technology identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.6"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.6");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Scientific knowledge generated underpinning hypothesis?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.7"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.7");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Peer reviewed publication studies confirming basic principles? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.8"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.8");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Research hypothesis formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.9"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.9");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Basic scientific principles observed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.10"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.10");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Algorithmic functions and assumptions underpinning observation defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.11"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.11");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Algorithmic functions and assumptions underpinning observation verified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.12"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.12");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Basic mathematical formulations identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.13"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.13");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Scientific knowledge generated underpinning hypothesis?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>
                            <div class="slidecontainer">
                                <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
                                
                              </div>
                        </td>
                        <td>
                            <div class="slidecontainer">
                                <p> <span id="demo1.14"></span>%</p>
                            </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo1.14");
                                output.innerHTML = slider.value;
                                
                                slider.oninput = function() {
                                output.innerHTML = this.value;
                                }
                            </script>
                        </td>
                        <td>Peer reviewed publication studies confirming basic principles? </td>
                        <td></td>
                    </tr>

                </table>


<!--Level 2-->

                <br><br>
                <table style="width:100%">
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>% Complete</th>
                        <th>Level 2 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>A concept formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Basic scientific principles underpinning concept identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary analytical studies confirm basic concept?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Application identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary design solution identified? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary system studies show application to be feasible?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary performance predictions made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Modeling & Simulation used to further refine performance predictions and confirm benefits?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Benefits formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Research & development approach formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Prelimitary definition of Laboratory tests and test environments established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Concept/application feasibility & benefits reported in scientific journals/conference proceedings/technical reports ?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>A concept formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Basic scientific principles underpinning concept identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Basic properties of algorithms, representations & concepts defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Prelimitary analytical studies, confirm basic concept?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Application identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Prelimitary design solution identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Prelimitary system studies show application to be feasible?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Prelimitary performance predictions made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Basic principles coded?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Modeling & simulation used to further refine performance predictions and confirm benefits?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Benefits formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Research & development approach formulated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Preliminary definition of Laboratory tests and test environments established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Experiments performed with synthetic data?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Concept/application feasibility & benefits reported in scientific journals/conference proceedings/tecnical reports? </td>
                        <td></td>
                    </tr>
                

                </table>




                
<!--Level 3-->
                <br><br>
                <table style="width:100%">
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>% Complete</th>
                        <th>Level 3 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Critical functions/components of the concept/application identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Subsystem or component analytical prediction made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Subsystem or component performance assessed by Modeling and Simulation?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary key parameters performance metrics established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Laboratory tests and test environments established? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Laboratory test support equipment and facilities completed for component/proof-of-concept testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Component acquisition/fabrication completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Component tests completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Analysis of test results completed establishing key performance metrics for components/subsystems?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Analytical verification of critical functions from proof-of-concept made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Analytical and experimental proof-of-cooncept documented?</td>
                        <td></td>
                    </tr>


                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Critical functions/components of the concept/application identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Subsystem or component analytical predictions made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Subsystem or component performance assessed by Modeling and Simulation?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Preliminary performance metrics established for key parameters?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Laboratory tests and test environments established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Laboratory test support equiment and computing environment completed for component/proof-of-concept testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Component aquisition/coding completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Component V&V completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Analysis of test results completed establishing key performance metrics for components/subsystems?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Analytical verification of critical functions from proof-of-concept made?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Analytical and experimental proof-of-concept documented?</td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Preliminary design of components/subsystem/systems to be manufactured exists?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Basic manufacturing requirements identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Current manufacturability concepts assessed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Modifications required to existing manufacturing concepts?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>New manucaturing concepts required?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Have requirements for new materials components, skill, and faicilities been identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Preliminary process flow identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Required manufacturing concepts identified?</td>
                        <td></td>
                    </tr>
                </table>


<!--Level 4-->
            
                <br><br>
                <table style="width:100%">
                                    
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>% Complete</th>
                        <th>Level 4 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Concept/application translated into detailed system/subsystem/component level breadboard design?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary definition of operational environment completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Laboratory tests and test environments defined for breadboard testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Pre-test predictions of breadboard performance in a laboratory environment assessed by Modeling and Simulation?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Key parameter performance metrics established for breadboard laboratory tests?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Laboratory test support equipment and facilities completed for breadboard testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>System/subsystem/component level breadboard fabrication completed? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Breadboard test completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Analysis of test results completed verifying performance relative to predicitions?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Preliminary system requirements for end user's application defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Critical test environments and performance predictions defined relative to the preliminary definition of the operating environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Relevant test environment defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Breadboard performance results verifying analytical predictions and definition of relevant operational environment documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Concept/application translated into detailed system/subsystem/component level software architecture design?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Preliminary definition of operational environment completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Laboratory tests and test environments defined for integrated component testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Pre-test predictions of integrated component performance in a laboratory environment assessed by modeling and simulation?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Key parameter performance metrics established for integrated component laboratory tests?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Laboratory test support equipment and computing environment completed for integrated component testing?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>System/subsystem/component level coding completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Integrated component tests completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Analysis of test results completed verifying performance relative to predictions?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Preliminary system requirements defined for end users' application?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Critical test environments and performance predictions defined relative to the preliminary definition of the operating environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Relevant test environment defined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Integrated component performance results verifying analytical predictions and definition of relevant operational environment documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Integrated component tests completed for reused code?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Integrated component performance results verifying analytical predictions and definition of relevant operational environment documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Manufacturing requirements (including testing) finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Machine/Tooling requirement identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Has training/certification been identified for all skills required (particulary new skills)?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Material requirements identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Producibility assessment initialized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Machinery/tooling modifications breadboarded?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Key manufacturing processes identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>New machinery/tooling breadboarded?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Metrology requirements identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Key metrology components breadboard?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Key analytical tool requirements identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Key analytical tools breadboarded?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Key manufacturing processes assessed in laboratory?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Mitigation strategies identified to address manufacturability/ producibility shortfalls?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>All manufacturing processes identified?</td>
                        <td></td>
                    </tr>
                </table>



<!--Level 5-->
            
                <br><br>
                <table style="width:100%">
                                    
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>% Complete</th>
                        <th>Level 5 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Critical functions and associated subsystems and components identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Relevant environments finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Scalling requirements defined & documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Critical subsystems and components breadboards/brassboards identified and designed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Subsystem/component breadboard/brassboards built?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Facilities, GSE, STE available to support testing in a relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>M&S pre-test performance predictions completed? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>System level performance predictions made for subsequent development phases?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Breadboard/brassboards successfully demonstrated in a relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Successful demonstration documented along with scaling requirements?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Critical functions and assiociated subsystems and components identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Relevant environments finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Scaling requirements defined & documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Critical subsystems and component implementations identfied and designed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Subsystem/component integrations and implementations completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Facilities, GSE, STE available to support testing in a relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Modeling & simulation pre-test performance predictions completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>System level performance predictions made for subsequent development phases?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Subsystems/integrated components successfully demonstrated in a relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Successfully demonstration documented along with scaling requirements?</td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Designed techniques defined to the point where largest problems dfefined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>System interface requirements known?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Trade studies and lab experiments define key manufacturing processes?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Tooling and machines demonstrated in lab?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Quality and reliability considered, but target levels not yet established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Initial assessment of assembly needs conducted?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Production processes reviewed with manufacturing for producibility?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Limited pre-production hardware produced?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Some special purpose components combined with available laboratory components?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Process, tooling, inspection, and test equipment in development?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Have facility requirements been identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Has a manufacturing flow chart been developed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Manufacturing process developed?</td>
                        <td></td>
                    </tr>
                </table>


<!--Level 6-->
            
                <br><br>
                <table style="width:100%">
                                    
                    <tr>
                        <th>HW/SW/MFG</th>
                        <th>% Complete</th>
                        <th>Level 6 (Check all that apply or use slider for % complete</th>
                        <th>Reset</th>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>System requirements finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Operating environment definition finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Subset of relevant environments identified that address key aspects of the final operating environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>M&S used to simulate system performance in an operational environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>M&S used to simulate system/subsystem engineering model/protype performance in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>External interfaces baselined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Scaling requirements finalized? </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Facilities, GSE, STE available to support engineering model testing in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Engineering model or prototype that adequately addresses critical scaling issues fabricated?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Engineering model or prototype that adequately addresses critical scaling issues tested in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Analysis of test results verify performance predictions for relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Test performance demonstrating agreement with performance predictions documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>System requirements finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Operating environment definition finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Subset of relevant environments identified that address key aspects of the final operating environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Modeling and simulation used to simulate system performance in an operational environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>H</td>
                        <td></td>
                        <td>Modeling and simulation used to simulate system/subsystem engineering model/protype performance in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Hardware and software interfaces baselined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Scaling requirements finalized?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Facilities, computing environment available to support software model testing in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Software model or prototype built that adequately addresses critical scaling issues?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Software model or prototype built that adequately addresses critical sacling issues tested in the relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Prototype implementation of the software demonstrated on full-scale realistic application?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Analysis of test results verify performance predictions for relevant environment?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Initial draft of required software documentation completed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Test performance documented demonstrating agreement with performance predictions?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td></td>
                        <td>Engineering feasibility fully demonstrated and documented?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Designed techniques defined to the point where largest problems dfefined?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>System interface requirements known?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Trade studies and lab experiments define key manufacturing processes?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Tooling and machines demonstrated in lab?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Quality and reliability considered, but target levels not yet established?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Initial assessment of assembly needs conducted?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Production processes reviewed with manufacturing for producibility?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Limited pre-production hardware produced?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Some special purpose components combined with available laboratory components?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Process, tooling, inspection, and test equipment in development?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Have facility requirements been identified?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Has a manufacturing flow chart been developed?</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td></td>
                        <td>Manufacturing process developed?</td>
                        <td></td>
                    </tr>
                </table>

            </form>
        </center>
@endsection