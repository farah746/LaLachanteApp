@extends('layouts.navadmin')
@section('content')
<div class="container">
    <h2 style="margin-bottom :25px"> Contact</h2>

    <div id="content" class="content p-0">
        <div class="profile-header">
            <div class="profile-header-cover"></div>

            <div class="profile-header-content">
                <div class="profile-header-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4xj0iSqUrByq6k1TGf6Z8AoRg1tGXUujma2RKRTpBkWzEGXRdn1RvvSgKOJGPvDIQgJc&usqp=CAU" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                </div>

                <div class="profile-header-info">
                    <h4 class="m-t-sm">{{ $contacts->nom }}</h4>
                    <p class="m-b-sm">Client {{ $contacts->actif_supprime }}</p>
                    <a href="{{ $contacts->id_contact }}" class="btn btn-xs btn-primary mb-3">Visiter</a>

                </div>
            </div>
        </div>

        <div class="profile-container">
            <div class="row row-space-20">
                <div class="col-md-8">
                    <div class="tab-content p-0">
                        <div class="tab-pane active show" id="profile-about">
                            <table class="table table-profile">
                                <thead>
                                    <tr>
                                        <th colspan="2">Information du client</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="field">Nom : </td>
                                        <td class="value">
                                            {{ $contacts->nom }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">Prénom :</td>
                                        <td class="value">
                                            {{ $contacts->prenom }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">Tel :</td>
                                        <td class="value">
                                            {{ $contacts->tel }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">Mail :</td>
                                        <td class="value">
                                            {{ $contacts->mail }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">Adresse :</td>
                                        <td class="value">
                                            {{ $contacts->adresse }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">CP :</td>
                                        <td class="value">
                                            {{ $contacts->CP }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field">Ville :</td>
                                        <td class="value">
                                            {{ $contacts->ville }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field" style="color: red;">Expérience en cours</td>
                                    </tr>
                                    <tr>
                                        <td class="field">Nom Expérience :</td>
                                        <td class="value">
                                            {{ $contacts->nom_experience }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field" style="color: red;">Historique des Factures</td>
                                    </tr>
                                    <tr>
                                        <td class="field">Id Fact :</td>
                                        <td class="value">
                                            {{ $contacts->id_fact }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="field" style="color: red;">Historique des Expériences</td>
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>

                <div class="col-md-4 hidden-xs hidden-sm">
                    <ul class="profile-info-list">
                        <thead>
                            <tr>
                                <th colspan="2"><strong style="text-decoration : underline"> Suite</strong></th>
                            </tr>
                        </thead>
                        <li>
                            <div class="field" style="color: red;">Donnée facture En cours</div>
                            <div class="field">Facture :</div>
                            <div class="value">{{ $contacts->statut }}</div>
                        </li>
                        <li>
                            <div class="field">Expérience :</div>
                            <div class="value">{{ $contacts->produit }}</div>
                        </li>
                        <li>
                            <div class="field">Nbr Personne :</div>
                            <div class="value">{{ $contacts->nbr_personne }}</div>
                        </li>
                        <li>
                            <div class="field">Nbr Chanson :</div>
                            <div class="value">{{ $contacts->nbr_chanson }}</div>
                        </li>
                        <li>
                            <div class="field">Option Bon cadeau :</div>
                            <div class="value">
                                {{ $contacts->option_cadeau }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Autre option :</div>
                            <div class="value">
                                {{ $contacts->autre_option }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Clip :</div>
                            <div class="value">
                                {{ $contacts->clip }}
                            </div>
                        </li>
                        <li>
                            <div class="field">45 T :</div>
                            <div class="value">
                                {{ $contacts->tours_45 }}
                            </div>
                        </li>
                        <li>
                            <div class="field">33 T :</div>
                            <div class="value">
                                {{ $contacts->tours_33 }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Préparation :</div>
                            <div class="value">
                                {{ $contacts->prepa }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Accompagnement :</div>
                            <div class="value">
                                {{ $contacts->accompagnement }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Numéro facture :</div>
                            <div class="value">
                                {{ $contacts->num_fact }}
                            </div>
                        </li>
                        <li>
                            <div class="field">Suivi facture :</div>
                            <div class="value">
                                {{ $contacts->suivi_fact }}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="h-100 d-flex align-items-center justify-content-center">
            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
            <a class="btn btn-success" href="" style="margin-left : 6px "> Print</a>
            <a href="{{ route('contacts.edit', $contacts->id_contact) }}" style="margin-left : 6px " class="btn btn-warning">Edit</a>
        </div>
    </div>


    <STYLE>
        body {
            background: #eaeaea;
        }

        .profile-info-list {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .friend-list,
        .img-grid-list {
            margin: -1px;
            list-style-type: none;
        }

        .profile-info-list>li.title {
            font-size: 0.625rem;
            font-weight: 700;
            color: #8a8a8f;
            padding: 0 0 0.3125rem;
        }

        .profile-info-list>li+li.title {
            padding-top: 1.5625rem;
        }

        .profile-info-list>li {
            padding: 0.625rem 0;
        }

        .profile-info-list>li .field {
            font-weight: 700;
        }

        .profile-info-list>li .value {
            color: #666;
        }

        .profile-info-list>li.img-list a {
            display: inline-block;
        }

        .profile-info-list>li.img-list a img {
            max-width: 2.25rem;
            -webkit-border-radius: 2.5rem;
            -moz-border-radius: 2.5rem;
            border-radius: 2.5rem;
        }

        .coming-soon-cover img,
        .email-detail-attachment .email-attachment .document-file img,
        .email-sender-img img,
        .friend-list .friend-img img,
        .profile-header-img img {
            max-width: 100%;
        }

        .table.table-profile th {
            border: none;
            color: #000;
            padding-bottom: 0.3125rem;
            padding-top: 0;
        }

        .table.table-profile td {
            border-color: #c8c7cc;
        }

        .table.table-profile tbody+thead>tr>th {
            padding-top: 1.5625rem;
        }

        .table.table-profile .field {
            color: #666;
            font-weight: 600;
            width: 25%;
            text-align: right;
        }

        .table.table-profile .value {
            font-weight: 500;
        }

        .profile-header {
            position: relative;
            overflow: hidden;
        }

        .profile-header .profile-header-cover {
            background: url(https://www.digitalacademy.fr/wp-content/uploads/2021/10/loei-thailand-may-10-2017-hand-holding-samsung-s8-with-mobi-1230x310.jpg) center no-repeat;
            background-size: 100% auto;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        .profile-header .profile-header-cover:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.85) 100%);
        }

        .profile-header .profile-header-content,
        .profile-header .profile-header-tab,
        .profile-header-img,
        body .fc-icon {
            position: relative;
        }

        .profile-header .profile-header-tab {
            background: #fff;
            list-style-type: none;
            margin: -1.25rem 0 0;
            padding: 0 0 0 8.75rem;
            border-bottom: 1px solid #c8c7cc;
            white-space: nowrap;
        }

        .profile-header .profile-header-tab>li {
            display: inline-block;
            margin: 0;
        }

        .profile-header .profile-header-tab>li>a {
            display: block;
            color: #000;
            line-height: 1.25rem;
            padding: 0.625rem 1.25rem;
            text-decoration: none;
            font-weight: 700;
            font-size: 0.75rem;
            border: none;
        }

        .profile-header .profile-header-tab>li.active>a,
        .profile-header .profile-header-tab>li>a.active {
            color: #007aff;
        }

        .profile-header .profile-header-content:after,
        .profile-header .profile-header-content:before {
            content: "";
            display: table;
            clear: both;
        }

        .profile-header .profile-header-content {
            color: #fff;
            padding: 1.25rem;
        }

        body .fc th a,
        body .fc-ltr .fc-basic-view .fc-day-top .fc-day-number,
        body .fc-widget-header a {
            color: #000;
        }

        .profile-header-img {
            float: left;
            width: 7.5rem;
            height: 7.5rem;
            overflow: hidden;
            z-index: 10;
            margin: 0 1.25rem -1.25rem 0;
            padding: 0.1875rem;
            -webkit-border-radius: 0.25rem;
            -moz-border-radius: 0.25rem;
            border-radius: 0.25rem;
            background: #fff;
        }

        .profile-header-info h4 {
            font-weight: 500;
            margin-bottom: 0.3125rem;
        }

        .profile-container {
            padding: 1.5625rem;
        }

        @media (max-width: 967px) {
            .profile-header-img {
                width: 5.625rem;
                height: 5.625rem;
                margin: 0;
            }

            .profile-header-info {
                margin-left: 6.5625rem;
                padding-bottom: 0.9375rem;
            }

            .profile-header .profile-header-tab {
                padding-left: 0;
            }
        }

        @media (max-width: 767px) {
            .profile-header .profile-header-cover {
                background-position: top;
            }

            .profile-header-img {
                width: 3.75rem;
                height: 3.75rem;
                margin: 0;
            }

            .profile-header-info {
                margin-left: 4.6875rem;
                padding-bottom: 0.9375rem;
            }

            .profile-header-info h4 {
                margin: 0 0 0.3125rem;
            }

            .profile-header .profile-header-tab {
                white-space: nowrap;
                overflow: scroll;
                padding: 0;
            }

            .profile-container {
                padding: 0.9375rem 0.9375rem 3.6875rem;
            }

            .friend-list>li {
                float: none;
                width: auto;
            }
        }

        .profile-info-list {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .friend-list,
        .img-grid-list {
            margin: -1px;
            list-style-type: none;
        }

        .profile-info-list>li.title {
            font-size: 0.625rem;
            font-weight: 700;
            color: #8a8a8f;
            padding: 0 0 0.3125rem;
        }

        .profile-info-list>li+li.title {
            padding-top: 1.5625rem;
        }

        .profile-info-list>li {
            padding: 0.625rem 0;
        }

        .profile-info-list>li .field {
            font-weight: 700;
        }

        .profile-info-list>li .value {
            color: #666;
        }

        .profile-info-list>li.img-list a {
            display: inline-block;
        }

        .profile-info-list>li.img-list a img {
            max-width: 2.25rem;
            -webkit-border-radius: 2.5rem;
            -moz-border-radius: 2.5rem;
            border-radius: 2.5rem;
        }

        .coming-soon-cover img,
        .email-detail-attachment .email-attachment .document-file img,
        .email-sender-img img,
        .friend-list .friend-img img,
        .profile-header-img img {
            max-width: 100%;
        }

        .table.table-profile th {
            border: none;
            color: #000;
            padding-bottom: 0.3125rem;
            padding-top: 0;
        }

        .table.table-profile td {
            border-color: #c8c7cc;
        }

        .table.table-profile tbody+thead>tr>th {
            padding-top: 1.5625rem;
        }

        .table.table-profile .field {
            color: #666;
            font-weight: 600;
            width: 25%;
            text-align: right;
        }

        .table.table-profile .value {
            font-weight: 500;
        }

        .friend-list {
            padding: 0;
        }

        .friend-list>li {
            float: left;
            width: 50%;
        }

        .friend-list>li>a {
            display: block;
            text-decoration: none;
            color: #000;
            padding: 0.625rem;
            margin: 1px;
            background: #fff;
        }

        .friend-list>li>a:after,
        .friend-list>li>a:before {
            content: "";
            display: table;
            clear: both;
        }

        .friend-list .friend-img {
            float: left;
            width: 3rem;
            height: 3rem;
            overflow: hidden;
            background: #efeff4;
        }

        .friend-list .friend-info {
            margin-left: 3.625rem;
        }

        .friend-list .friend-info h4 {
            margin: 0.3125rem 0;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .friend-list .friend-info p {
            color: #666;
            margin: 0;
        }
    </STYLE>

    @endsection