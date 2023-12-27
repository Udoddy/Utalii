@extends('layouts.master')
@section('page_title', 'Prediction')
@section('content')

    <div class="card ">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Budget Prediction</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body ">
            <ul class="nav nav-tabs nav-tabs-highlight">
                @if(Qs::userIsTeamSA())
                <li class="nav-item"><a href="#add-tt" class="nav-link active" data-toggle="tab">Review Questions</a></li>
                @endif
            </ul>

            <div class="tab-content">
                    <form id="predictionForm" method="POST" action="{{ route('predict') }}" onsubmit="event.preventDefault(); submitPredictionForm();">
                    @csrf

                    <div class="form-group">
                        <label for="country">Select a country:</label>
                        <select id="country" name="country" class="form-control">
                            <option value="SWIZERLAND">SWITZERLAND</option>
                            <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                            <option value="CHINA">CHINA</option>
                            <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                            <option value="UNITED STATES OF AMERICA">UNITED STATES OF AMERICA</option>
                            <option value="NIGERIA">NIGERIA</option>
                            <option value="INDIA">INDIA</option>
                            <option value="BRAZIL">BRAZIL</option>
                            <option value="CANADA">CANADA</option>
                            <option value="MALT">MALT</option>
                            <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                            <option value="RWANDA">RWANDA</option>
                            <option value="AUSTRIA">AUSTRIA</option>
                            <option value="MYANMAR">MYANMAR</option>
                            <option value="GERMANY">GERMANY</option>
                            <option value="KENYA">KENYA</option>
                            <option value="ALGERIA">ALGERIA</option>
                            <option value="IRELAND">IRELAND</option>
                            <option value="DENMARK">DENMARK</option>
                            <option value="SPAIN">SPAIN</option>
                            <option value="FRANCE">FRANCE</option>
                            <option value="ITALY">ITALY</option>
                            <option value="EGYPT">EGYPT</option>
                            <option value="QATAR">QATAR</option>
                            <option value="MALAWI">MALAWI</option>
                            <option value="JAPAN">JAPAN</option>
                            <option value="SWEDEN">SWEDEN</option>
                            <option value="NETHERLANDS">NETHERLANDS</option>
                            <option value="UAE">UAE</option>
                            <option value="UGANDA">UGANDA</option>
                            <option value="AUSTRALIA">AUSTRALIA</option>
                            <option value="YEMEN">YEMEN</option>
                            <option value="NEW ZEALAND">NEW ZEALAND</option>
                            <option value="BELGIUM">BELGIUM</option>
                            <option value="NORWAY">NORWAY</option>
                            <option value="ZIMBABWE">ZIMBABWE</option>
                            <option value="ZAMBIA">ZAMBIA</option>
                            <option value="CONGO">CONGO</option>
                            <option value="BURGARIA">BURGARIA</option>
                            <option value="PAKISTAN">PAKISTAN</option>
                            <option value="GREECE">GREECE</option>
                            <option value="MAURITIUS">MAURITIUS</option>
                            <option value="DRC">DRC</option>
                            <option value="OMAN">OMAN</option>
                            <option value="PORTUGAL">PORTUGAL</option>
                            <option value="BELGIUM">BELGIUM</option>
                            <option value="NORWAY">NORWAY</option>
                            <option value="ZIMBABWE">ZIMBABWE</option>
                            <option value="ZAMBIA">ZAMBIA</option>
                            <option value="CONGO">CONGO</option>
                            <option value="BURGARIA">BURGARIA</option>
                            <option value="PAKISTAN">PAKISTAN</option>
                            <option value="GREECE">GREECE</option>
                            <option value="MAURITIUS">MAURITIUS</option>
                            <option value="DRC">DRC</option>
                            <option value="OMAN">OMAN</option>
                            <option value="PORTUGAL">PORTUGAL</option>
                            <option value="KOREA">KOREA</option>
                            <option value="SWAZILAND">SWAZILAND</option>
                            <option value="TUNISIA">TUNISIA</option>
                            <option value="KUWAIT">KUWAIT</option>
                            <option value="DOMINICA">DOMINICA</option>
                            <option value="ISRAEL">ISRAEL</option>
                            <option value="FINLAND">FINLAND</option>
                            <option value="CZECH REPUBLIC">CZECH REPUBLIC</option>
                            <option value="UKRAINE">UKRAINE</option>
                            <option value="TURKEY">TURKEY</option>
                            <option value="TRINIDAD TOBACCO">TRINIDAD TOBACCO</option>
                            <option value="IRAQ">IRAQ</option>
                            <option value="SLOVENIA">SLOVENIA</option>
                            <option value="UNITED ARAB EMIRATES">UNITED ARAB EMIRATES</option>
                            <option value="COMORO">COMORO</option>
                            <option value="SRI LANKA">SRI LANKA</option>
                            <option value="IRAN">IRAN</option>
                            <option value="MONTENEGRO">MONTENEGRO</option>
                            <option value="ANGOLA">ANGOLA</option>
                            <option value="LEBANON">LEBANON</option>
                            <option value="SLOVAKIA">SLOVAKIA</option>
                            <option value="ROMANIA">ROMANIA</option>
                            <option value="MEXICO">MEXICO</option>
                            <option value="LATVIA">LATVIA</option>
                            <option value="CROATIA">CROATIA</option>
                            <option value="CAPE VERDE">CAPE VERDE</option>
                            <option value="SUDAN">SUDAN</option>
                            <option value="COSTARICA">COSTARICA</option>
                            <option value="CHILE">CHILE</option>
                            <option value="NAMIBIA">NAMIBIA</option>
                            <option value="TAIWAN">TANZANIA</option>
                            <option value="SERBIA">SERBIA</option>
                            <option value="LESOTHO">LESOTHO</option>
                            <option value="GEORGIA">GEORGIA</option>
                            <option value="PHILIPINES">PHILIPINES</option>
                            <option value="IVORY COAST">IVORY COAST</option>
                            <option value="MADAGASCAR">MADAGASCAR</option>
                            <option value="DJIBOUT">DJIBOUT</option>
                            <option value="CYPRUS">CYPRUS</option>
                            <option value="ARGENTINA">ARGENTINA</option>
                            <option value="URUGUAY">URUGUAY</option>
                            <option value="MOROCCO">MOROCCO</option>
                            <option value="THAILAND">THAILAND</option>
                            <option value="BERMUDA">BERMUDA</option>
                            <option value="ESTONIA">ESTONIA</option>
                            <option value="BOTSWANA">BOTSWANA</option>
                            <option value="VIETNAM">VIETNAM</option>
                            <option value="GUINEA">GUINEA</option>
                            <option value="MACEDONIA">MACEDONIA</option>
                            <option value="HAITI">HAITI</option>
                            <option value="LIBERIA">LIBERIA</option>
                            <option value="SAUDI ARABIA">SAUDI ARABIA</option>
                            <option value="BOSNIA">BOSNIA</option>
                            <option value="BULGARIA">BULGARIA</option>
                            <option value="PERU">PERU</option>
                            <option value="BANGLADESH">BANGLADESH</option>
                            <option value="JAMAICA">JAMAICA</option>
                            <option value="SOMALIA">SOMALIA</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="age_group">Select your age group:</label>
                        <select id="age_group" name="age_group" class="form-control">
                            <option value="1-24">1-24</option>
                            <option value="25-44">25-44</option>
                            <option value="45-64">45-64</option>
                            <option value="65+">65+</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="travel_with">Who do you plan to travel with:</label>
                        <select id="travel_with" name="travel_with" class="form-control">
                            <option value="Friends/Relatives">Friends/Relatives</option>
                            <option value="Alone">Alone</option>
                            <option value="Spouse">Spouse</option>
                            <option value="Children">Children</option>
                            <option value="Spouse and Children">Spouse and Children</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="purpose">What is the purpose of visiting Tanzania:</label>
                        <select id="purpose" name="purpose" class="form-control">
                            <option value="Leisure and Holidays">Leisure and Holidays</option>
                            <option value="Visiting Friends and Relatives">Visiting friends and Relatives</option>
                            <option value="Business">Business</option>
                            <option value="Meetings and Conference">Meetings and Conference</option>
                            <option value="Volunteering">Volunteering</option>
                            <option value="Scientific and Academic">Scientific and Academic</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="total_number">How many people are you coming with in Tanzania:</label>
                        <input type="number" id="total_number" name="total_number" min="1" max="100" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="main_activity">What is the main activity you want to do when you are in Tanzania:</label>
                        <select id="main_activity" name="main_activity" class="form-control">
                            <option value="Wildlife tourism">Wildlife tourism</option>
                            <option value="Cultural tourism">Cultural tourism</option>
                            <option value="Mountain climbing">Mountain Climbing</option>
                            <option value="Beach tourism">Beach Tourism</option>
                            <option value="Conference tourism">Conference Tourism</option>
                            <option value="Bird watching">Bird Watching</option>
                            <option value="business">Business</option>
                            <option value="Diving and Sport Fishing">Diving and Sport fishing</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tour_arrangement">How do you arrange your tour:</label>
                        <select id="tour_arrangement" name="tour_arrangement" class="form-control">
                            <option value="Independent">Independent</option>
                            <option value="Package Tour">Package tour</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Package Tour Inclusions</h4>
                            <div class="form-group">
                                <label for="int_transport">International Transportation:</label>
                                <select id="int_transport" name="int_transport" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="accomodation">Accommodation Service:</label>
                                <select id="accomodation" name="accomodation" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="food">Food Service:</label>
                                <select id="food" name="food" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="local_transport">Local Transportation:</label>
                                <select id="local_transport" name="local_transport" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Package Tour Services</h4>
                            <div class="form-group">
                                <label for="sightseeing">Sightseeing Service:</label>
                                <select id="sightseeing" name="sightseeing" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tour_guide">Tour Guiding Service:</label>
                                <select id="tour_guide" name="tour_guide" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="insurance">Insurance:</label>
                                <select id="insurance" name="insurance" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="first_trip">First Trip in Tanzania:</label>
                                <select id="first_trip" name="first_trip" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="payment_mode">Payment Mode for Tourism Service:</label>
                        <select id="payment_mode" name="payment_mode" class="form-control">
                            <option value="Cash">Cash</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Other">Other</option>
                            <option value="Travellers Cheque">Traveller's Cheque</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Duration in Tanzania Mainland</h4>
                            <div class="form-group">
                                <label for="Tzmainland">Number of Days:</label>
                                <input type="number" id="Tzmainland" name="Tzmainland" min="0" max="100" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Duration in Zanzibar</h4>
                            <div class="form-group">
                                <label for="Zanzibar">Number of Days:</label>
                                <input type="number" id="Zanzibar" name="Zanzibar" min="0" max="100" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#predictModal">
                            Make Prediction <i class="icon-paperplane ml-2"></i>
                          </button>

                    </div>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="predictModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Estimated Budget:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <div id="resultContainer" class="result-container">
                            <p id="budgetAmount" class="budget-amount"></p>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save Budget</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <!--modal end-->
            </div>


        {{-- <script>
            function showEstimatedBudget(event) {
                event.preventDefault(); // Prevent form submission

                $ajax()
                // Perform calculations to estimate the budget
                var estimatedBudget = calculateEstimatedBudget();

                // Display the estimated budget on the page
                var budgetAmountElement = document.getElementById("budgetAmount");
                budgetAmountElement.textContent = estimatedBudget + "Tsh" ;

                // Show the result container
                var resultContainer = document.getElementById("resultContainer");
                resultContainer.style.display = "block";
            }

            // Rest of the JavaScript code...
        </script> --}}
        <script>
            function submitPredictionForm() {
                var form = document.getElementById('predictionForm');
                var formData = new FormData(form);

                // Make an AJAX request to the Laravel endpoint
                $.ajax({
                    url: form.action,
                    type: form.method,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Update modal content with the prediction result
                        var message = response.message;
                        $('#budgetAmount').text(message);
                        $('#predictModal').modal('show');
                    },
                    error: function(xhr, status, error) {
                        var errorMessage = 'API request failed with status code: ' + xhr.status;
                        var errorResponse = xhr.responseText;
                        $('#budgetAmount').html('<span class="text-danger">' + errorMessage + '</span><br><span class="text-danger">Error response: ' + errorResponse + '</span>');
                        $('#predictModal').modal('show');
                    }
                });
            }
        </script>



        </div>
    </div>

    {{--Budgeting Ends--}}

@endsection
