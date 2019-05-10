@extends('users.layout') 
@section('content')
<h3>{{$header}}</h3>
<hr>
<div class="row">
    <div class="col-12">
            <div class="table-responsive">
                    <table class="table table-bordered" id="table">
                        <tbody>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center" colspan="3"></th>
                                <th class="text-center" colspan="5">Woodwind Instruments</th>
                                <th class="text-center" colspan="7">Brass Instruments</th>
                            </tr>
                            <tr>
                                <th class="text-center"><strong>KEY</strong><br>Concert</th>
                                <th class="text-center">KEY BOARD(C)</th>
                                <th class="text-center">GUITAR(C)</th>
                                <th class="text-center">GUITAR BASS(C)</th>
                                <th class="text-center">FLUTE(C)</th>
                                <th class="text-center">CRARINET(Bb)</th>
                                <th class="text-center">SOPRANO SAXOPHONE(Bb)</th>
                                <th class="text-center">AUTO SAXOPHONE(Bb)</th>
                                <th class="text-center">TENNER SAXOPHONE(Bb)</th>
                                <th class="text-center">TRUMPET(Bb)</th>
                                <th class="text-center">MELLOPHONE(F)</th>
                                <th class="text-center">HORN(F)</th>
                                <th class="text-center">TROMBONE(Bb)</th>
                                <th class="text-center">EUPHONIUM(Bb)</th>
                                <th class="text-center">BARITONE(Bb)</th>
                                <th class="text-center">TUBA(Bb)</th>
                            </tr>
                            <tr>
                                <th class="text-center">Bb Concert</th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=KEY BOARD&x=1&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=GUITAR&x=2&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=GUITAR BASS&x=3&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=FLUTE&x=4&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=CRARINET&x=5&y=1">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=SOPRANO SAXOPHONE&x=6&y=1">C</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=AUTO SAXOPHONE&x=7&y=1">G</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=TENNER SAXOPHONE&x=8&y=1">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=TRUMPET&x=9&y=1">C</a></th>
                                <th class="text-center"><a href="scal/show?key=F&ins=MELLOPHONE&x=10&y=1">F</a></th>
                                <th class="text-center"><a href="scal/show?key=F&ins=HORN&x=11&y=1">F</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=TROMBONE&x=12&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=EUPHONIUM&x=13&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=BARITONE&x=14&y=1">Bb</a></th>
                                <th class="text-center"><a href="scal/show?key=Bb&ins=TUBA&x=15&y=1">Bb</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">C Concert</th>
                                <th class="text-center"><a href="scal/show?key=C&ins=KEY BOARD&x=1&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=GUITAR&x=2&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=GUITAR BASS&x=3&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=FLUTE&x=4&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=CRARINET&x=5&y=2">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=SOPRANO SAXOPHONE&x=6&y=2">D</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=AUTO SAXOPHONE&x=7&y=2">A</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=TENNER SAXOPHONE&x=8&y=2">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=TRUMPET&x=9&y=2">D</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=MELLOPHONE&x=10&y=2">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=HORN&x=11&y=2">G</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=TROMBONE&x=12&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=EUPHONIUM&x=13&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=BARITONE&x=14&y=2">C</a></th>
                                <th class="text-center"><a href="scal/show?key=C&ins=TUBA&x=15&y=2">C</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">G Concert</th>
                                <th class="text-center"><a href="scal/show?key=G&ins=KEY BOARD&x=1&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=GUITAR&x=2&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=GUITAR BASS&x=3&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=FLUTE&x=4&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=CRARINET&x=5&y=3">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=SOPRANO SAXOPHONE&x=6&y=3">A</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=AUTO SAXOPHONE&x=7&y=3">E</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=TENNER SAXOPHONE&x=8&y=3">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=TRUMPET&x=9&y=3">A</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=MELLOPHONE&x=10&y=3">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=HORN&x=11&y=3">D</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=TROMBONE&x=12&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=EUPHONIUM&x=13&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=BARITONE&x=14&y=3">G</a></th>
                                <th class="text-center"><a href="scal/show?key=G&ins=TUBA&x=15&y=3">G</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">D Concert</th>
                                <th class="text-center"><a href="scal/show?key=D&ins=KEY BOARD&x=1&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=GUITAR&x=2&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=GUITAR BASS&x=3&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=FLUTE&x=4&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=CRARINET&x=5&y=4">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=SOPRANO SAXOPHONE&x=6&y=4">E</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=AUTO SAXOPHONE&x=7&y=4">B</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=TENNER SAXOPHONE&x=8&y=4">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=TRUMPET&x=9&y=4">E</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=MELLOPHONE&x=10&y=4">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=HORN&x=11&y=4">A</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=TROMBONE&x=12&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=EUPHONIUM&x=13&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=BARITONE&x=14&y=4">D</a></th>
                                <th class="text-center"><a href="scal/show?key=D&ins=TUBA&x=15&y=4">D</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">A Concert</th>
                                <th class="text-center"><a href="scal/show?key=A&ins=KEY BOARD&x=1&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=GUITAR&x=2&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=GUITAR BASS&x=3&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=FLUTE&x=4&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=CRARINET&x=5&y=5">B</a></th>
                                <th class="text-center"><a href="scal/show?key=Bins=SOPRANO SAXOPHONE&x=6&y=5">B</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=AUTO SAXOPHONE&x=7&y=5">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=TENNER SAXOPHONE&x=8&y=5">B</a></th>
                                <th class="text-center"><a href="scal/show?key=Bins=TRUMPET&x=9&y=5">B</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=MELLOPHONE&x=10&y=5">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=HORN&x=11&y=5">E</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=TROMBONE&x=12&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=EUPHONIUM&x=13&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=BARITONE&x=14&y=5">A</a></th>
                                <th class="text-center"><a href="scal/show?key=A&ins=TUBA&x=15&y=5">A</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">E Concert</th>
                                <th class="text-center"><a href="scal/show?key=E&ins=KEY BOARD&x=1&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=GUITAR&x=2&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=GUITAR BASS&x=3&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=FLUTE&x=4&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=CRARINET&x=5&y=6">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=SOPRANO SAXOPHONE&x=6&y=6">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=AUTO SAXOPHONE&x=7&y=6">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=TENNER SAXOPHONE&x=8&y=6">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=TRUMPET&x=9&y=6">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=MELLOPHONE&x=10&y=6">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=HORN&x=11&y=6">B</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=TROMBONE&x=12&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=EUPHONIUM&x=13&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=BARITONE&x=14&y=6">E</a></th>
                                <th class="text-center"><a href="scal/show?key=E&ins=TUBA&x=15&y=6">E</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">B Concert</th>
                                <th class="text-center"><a href="scal/show?key=B&ins=KEY BOARD&x=1&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=GUITAR&x=2&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=GUITAR BASS&x=3&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=FLUTE&x=4&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=CRARINET&x=5&y=7">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=SOPRANO SAXOPHONE&x=6&y=7">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=AUTO SAXOPHONE&x=7&y=7">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=TENNER SAXOPHONE&x=8&y=7">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=TRUMPET&x=9&y=7">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=MELLOPHONE&x=10&y=7">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=HORN&x=11&y=7">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=TROMBONE&x=12&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=EUPHONIUM&x=13&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=BARITONE&x=14&y=7">B</a></th>
                                <th class="text-center"><a href="scal/show?key=B&ins=TUBA&x=15&y=7">B</a></th>
                            </tr>
                            <tr>
                                <th class="text-center">F# Concert</th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=KEY BOARD&x=1&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=GUITAR&x=2&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=GUITAR BASS&x=3&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=FLUTE&x=4&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=CRARINET&x=5&y=8">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=SOPRANO SAXOPHONE&x=6&y=8">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=D#&ins=AUTO SAXOPHONE&x=7&y=8">D#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=TENNER SAXOPHONE&x=8&y=8">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=TRUMPET&x=9&y=8">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=MELLOPHONE&x=10&y=8">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=HORN&x=11&y=8">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=TROMBONE&x=12&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=EUPHONIUM&x=13&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=BARITONE&x=14&y=8">F#</a></th>
                                <th class="text-center"><a href="scal/show?key=F#&ins=TUBA&x=15&y=8">F#</a></th>
                            </tr>
                            <tr></a>
                                <th class="text-center">C# Concert</th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=KEY BOARD&x=1&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=GUITAR&x=2&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=GUITAR BASS&x=3&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=FLUTE&x=4&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=D#&ins=CRARINET&x=5&y=9">D#</a></th>
                                <th class="text-center"><a href="scal/show?key=D#&ins=SOPRANO SAXOPHONE&x=6&y=9">D#</a></th>
                                <th class="text-center"><a href="scal/show?key=A#&ins=AUTO SAXOPHONE&x=7&y=9">A#</a></th>
                                <th class="text-center"><a href="scal/show?key=D#&ins=TENNER SAXOPHONE&x=8&y=9">D#</a></th>
                                <th class="text-center"><a href="scal/show?key=D#&ins=TRUMPET&x=9&y=9">D#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=MELLOPHONE&x=10&y=9">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=G#&ins=HORN&x=11&y=9">G#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=TROMBONE&x=12&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=EUPHONIUM&x=13&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=BARITONE&x=14&y=9">C#</a></th>
                                <th class="text-center"><a href="scal/show?key=C#&ins=TUBA&x=15&y=9">C#</a></th>
                            </tr>

                        </tbody>
                    </table>
                </div>
    </div>
</div>
@endsection