<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiket detail</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            @import url('https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700');
            font-family: 'Ubuntu', sans-serif;
            background-color: #eeeeee;
            height: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-align: center;
            color: #1c1c1c;
            display: flex;
            justify-content: center;
        }


        .text-danger {
            color: red;
            margin-left: 20px;
        }

        .text-success {
            color: green;
            margin-left: 20px;
        }

        .ticket-system {
            max-width: 385px;

            .top {
                display: flex;
                align-items: center;
                flex-direction: column;

                .title {
                    font-weight: normal;
                    font-size: 1.6em;
                    text-align: left;
                    margin-left: 20px;
                    margin-bottom: 50px;
                    color: #fff;
                }

                .printer {
                    width: 90%;
                    height: 20px;
                    border: 5px solid #fff;
                    border-radius: 10px;
                    box-shadow: 1px 3px 3px 0px rgba(0, 0, 0, 0.2);
                }
            }

            .receipts-wrapper {
                overflow: hidden;
                margin-top: -10px;
                padding-bottom: 10px;
            }

            .receipts {
                width: 100%;
                display: flex;
                align-items: center;
                flex-direction: column;
                transform: translateY(-510px);

                animation-duration: 2.5s;
                animation-delay: 500ms;
                animation-name: print;
                animation-fill-mode: forwards;


                .receipt {
                    padding: 25px 30px;
                    text-align: left;
                    min-height: 200px;
                    width: 88%;
                    background-color: #fff;
                    border-radius: 10px 10px 20px 20px;
                    box-shadow: 1px 3px 8px 3px rgba(0, 0, 0, 0.2);

                    .airliner-logo {
                        max-width: 80px;
                    }

                    .route {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin: 20px 0;

                        .plane-icon {
                            width: 30px;
                            height: 30px;
                            transform: rotate(90deg);
                        }

                        h2 {
                            font-weight: 300;
                            font-size: 2.2em;
                            margin: 0;
                        }
                    }

                    .details {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;

                        .item {
                            display: flex;
                            flex-direction: column;
                            min-width: 70px;

                            span {
                                font-size: .8em;
                                color: rgba(28, 28, 28, .7);
                                font-weight: 500;
                            }

                            h3 {
                                margin-top: 10px;
                                margin-bottom: 25px;
                            }
                        }
                    }

                    &.qr-code {
                        height: 140px;
                        min-height: unset;
                        position: relative;
                        border-radius: 20px 20px 10px 10px;
                        display: flex;
                        align-items: center;

                        //TODO: replace with svg
                        &::before {
                            content: '';
                            background: linear-gradient(to right, #fff 50%, #3f32e5 50%);
                            background-size: 22px 4px, 100% 4px;
                            height: 4px;
                            width: 90%;
                            display: block;
                            left: 0;
                            right: 0;
                            top: -1px;
                            position: absolute;
                            margin: auto;
                        }

                        .qr {
                            width: 70px;
                            height: 70px;
                        }

                        .description {
                            margin-left: 20px;

                            h2 {
                                margin: 0 0 5px 0;
                                font-weight: 500;
                            }

                            p {
                                margin: 0;
                                font-weight: 400;
                            }
                        }
                    }
                }
            }
        }

        @keyframes print {
            0% {
                transform: translateY(-510px)
            }

            35% {
                transform: translateY(-395px);
            }

            70% {
                transform: translateY(-140px);
            }

            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- INSPO:  https://www.behance.net/gallery/69583099/Mobile-Flights-App-Concept -->
    <main class="ticket-system">
        <div class="top">
            <div class="printer" style="margin-top: 40px;">
            </div>
            <div class="receipts-wrapper">
                <div class="receipts">
                    <div class="receipt">
                        <img src="https://i.ibb.co/v4q2496/ticket.png" width="20%" style="margin-bottom: -50px;">
                        <div class="route" style="margin-bottom: 7px;">
                            <h2 style="margin-top: 37px;">{{ $detail->event }}</h2>
                        </div>
                        <div class="details">
                            <div class="item">
                                <span>Nama</span>
                                <h3>{{ $detail->nama }}</h3>
                            </div>
                            <div class="item">
                                <span>Email</span>
                                <h3>{{ $detail->email }}</h3>
                            </div>
                            <div class="item">
                                <span>Kode event</span>
                                <h3>{{ $detail->kode_event }}</h3>
                            </div>
                            <div class="item">
                                <span>Tanggal</span>
                                <h3>{{ $detail->tanggal }}</h3>
                            </div>
                            <div class="item">
                                <span>Jam</span>
                                <h3>{{ $detail->jam }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="receipt qr-code">
                        {!! $qrCode !!}
                        <div class="description" style="margin-left:50px">
                            <h3>Tiketku.dom</h3>
                            @php
                                if ($detail->scan == 'terpakai') {
                                    echo "<span class='text-danger'>terpakai</span>";
                                } else {
                                    echo "<span class='text-success'>belum dipakai</span>";
                                }
                            @endphp
                        </div>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>
