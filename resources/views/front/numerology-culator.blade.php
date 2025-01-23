@extends('front.layouts.master')
@section('section')
    <section class="inrbnr">
       
        <div class="site-width">
            <div class="inrbnrContent">
                <div class="inrbnrtext">
                    <h2>Numerology Calculator</h2>
                    <ul class="inrbrnNav">
                        <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i> Home</a></li>
                        <li><a href="javascript:void(0)">Tools</a></li>
                        <li><a href="javascript:void(0)"> Numerology Calculator</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Numerology Calculator -->

    <section class="numerologyCalculator pt-50 pb-50">
        <div class="site-width">
            <div class="titleSection ">
                <div class="text-center">
                    <h1 class="titlwithh1">
                        Name Numerology Calculator for Name & Business
                    </h1>
                </div>
            </div>
            <div class="numerologyCalc">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <div class="aboutParagraph">
                                    <p>
                                        Seeking insights from <strong>numerology calculators help you with business, lifestyle, family, relationship, career etc.</strong> A numerology calculator can help you to get a better understanding of yourself. It tells you your strengths and weaknesses.
                                    </p>
                                    <p>
                                        <strong>Numerology calculator</strong> can be used for gaining insights for different human life aspects. It can be used as a Business numerology calculator, name numerology calculator, chaldean numerology calculator. Moreover, Business numerology calculators are used when a name is given to a business. Whereas, Chaldean numerology calculator is used by a person to balance positive energies in their lives.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="numerologyCalcFom hctFromContainer">
                            <h5>Numerology Calculator</h5>
                            <div class="formWrapper " style="margin-top: 0px;">
                                <label class="form-group" for="name" ><span>Enter name:</span>
                                    <input id="name" class="form-control" placeholder="Enter Name" type="text">
                                </label> 
                                <div class="formSubmitBtn " style="margin-top: 20px;">
                                    <button id="calc"  onclick="calculateNumerology()" type="submit" class="btn1">
                                        Calculate Numerology Number
                                    </button>
                                </div>
                            </div>
                            <p id="twoDigitResult"></p>
                                
                            <p id="oneDigitResult"></p>
                            
                            <p id="description"></p>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="aboutSideContents">
                            <div class="aboutSide">
                                <div class="aboutParagraph">
                                    <p>
                                        There are 9 planets in the solar system. These 9 planets are associated with numbers from 1 to 9. Numbers are very important in both astrology and numerology. However, numbers are also a significant aspect of our lives. Whether it's your date of birth, vehicle number, house number or phone number, numbers are everywhere. These numbers hold unique energies and have a specific impact on us.
                                    </p>
                                    <h3 class="h3normaltitle">There are three types of numbers in numerology:</h3>
                                    <ul class="normalList">
                                        <li>Personality Number</li>
                                        <li>Destiny Number</li>
                                        <li>Chaldean Number</li>
                                    </ul>
                                    <h4>
                                        Personality numbers
                                    </h4>
                                    <p>
                                        It represents that the person may inherit the characteristics of its ruling planet.
                                    </p>
                                    <p>
                                        It is calculated by using a Numerology calculator. This requires the date of birth of the person. Basically, the day on which a person is born is considered their personality number.
                                    </p>
                                    <p>
                                        <strong>For example: Assume a person is born on May, 10 2002. Their personality number is 1. (1+0 = 1) Number 1 is associated with the Sun.</strong> Thus, the person reflects qualities like leadership, energetic, strength, etc.
                                    </p>
                                    <p>
                                        Similarly, let’s take another example: <strong>A person is born on December, 20 1989. Their personality number is 2. (2+0 = 2) Number 2 is ruled by the Moon.</strong> Thus, the person is emotional, creative, and innovative in nature. Also, this number represents feminine energy.
                                    </p>
                                    <p>
                                        Personality number numerology calculator makes it way easier to determine these insights. All you need is understanding of the personality traits each number represents.
                                    </p>
                                </div>
                                <div class="aboutParagraph">
                                    <h4>Destiny Number</h4>
                                    <p>
                                        Destiny numbers provide insights to a person’s relationship with others, career, and prosperity in their entire life. The Numerology calculator of Destiny number requires three things; Born Date, month, and year.
                                    </p>
                                    <p><strong>Suppose, a person is born on February 8, 1955, then on this basis their Destiny number will be 2. ( 8 + 2 + 1 + 9 + 5 + 5 = 29, further, 2 + 9 = 11, finally, 1 + 1 = 2)</strong></p>
                                    <p>On the basis of this calculation, it is suggested that this person should perform any auspicious work on dates such as 2, 20, 11, and 29. As the chances of profit increase.</p>
                                </div>
                                <div class="aboutParagraph">
                                    <h5>Chaldean Number</h5>
                                   <p>
                                         Chaldean numerology originated from Vedic numerology. focuses on the concept of vibrations and their corresponding frequencies. These vibrations are present in every number and alphabet. Its concept is similar to name numerology. And it is also known as Chaldean Name Numerology. People with negative vibrations can change their name to change their destiny and attract positive vibrations. The table below gives an understanding of numbers associated with each alphabet according to Chaldean numerology calculator.
                                   </p>
                                </div>
                                <div class="aboutParagraph">
                                    <h2>Chaldean Numerology Table</h5>
                                   <p>
                                         Chaldean numerology originated from Vedic numerology. focuses on the concept of vibrations and their corresponding frequencies. These vibrations are present in every number and alphabet. Its concept is similar to name numerology. And it is also known as Chaldean Name Numerology. People with negative vibrations can change their name to change their destiny and attract positive vibrations. The table below gives an understanding of numbers associated with each alphabet according to Chaldean numerology calculator.
                                   </p>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped ChaldeanNumerologyTable">
                            <thead>
                                <tr>
                                    <th>1</th>
                                    <th>2</th>
                                    <th>3</th>
                                    <th>4</th>
                                    <th>5</th>
                                    <th>6</th>
                                    <th>7</th>
                                    <th>8</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td>E</td>
                                    <td>U</td>
                                    <td>O</td>
                                    <td>F</td>
                                </tr>
                                <tr>
                                    <td>I</td>
                                    <td>K</td>
                                    <td>G</td>
                                    <td>M</td>
                                    <td>H</td>
                                    <td>V</td>
                                    <td>Z</td>
                                    <td>P</td>
                                </tr>
                                <tr>
                                    <td>J</td>
                                    <td>R</td>
                                    <td>L</td>
                                    <td>T</td>
                                    <td>N</td>
                                    <td>W</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Q</td>
                                    <td></td>
                                    <td>S</td>
                                    <td></td>
                                    <td>X</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Y</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <div class="FAQsWrapper">
                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    What is a Numerology Calculator?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        A Numerology Calculator is a modern tool based on the concept of numerology. It helps individuals discover hidden powers, characteristics, personality traits, and more by analyzing numbers associated with their name and birthdate.
                                    </div>
                                </div>
                            </div>
                    
                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    What is Chaldean Numerology?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Chaldean Numerology is the oldest form of numerology believed to have originated from the ancient kingdom of Babylon. It calculates the outer personality based on a single digit and the inner personality based on two digits.
                                    </div>
                                </div>
                            </div>
                    
                            <div class="FAQsWrapperCard">
                                <div class="question">
                                    What are the three factors on which numerology is based?
                                </div>
                                <div class="answercont">
                                    <div class="answer">
                                        Numerology predictions are based on three factors: the name number, date of birth number, and the total of date number + month number + year number. These factors help in understanding various aspects of an individual's life.
                                    </div>
                                </div>
                            </div>
                        
                    
                        </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{ asset('front') }}/assets/js/numerology.js"></script>
 @endsection