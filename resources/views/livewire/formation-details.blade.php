<div class="class-details-instructor-wrap">


    <!-- visitor  -->
    <div class="class-details-instructor-inner" @if ($display != 'details') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                Format
            </div>
            <div class="class-categories">
                <div class="class @if ( $formation->type == 1 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/e-learining-icon.svg') }}" alt="E-learning">
                    </div>
                    E-learning
                </div>
                <div class="class @if ( $formation->type == 2 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/presentiel-icon.svg') }}" alt="E-learning">
                    </div>
                    Présentiel
                </div>
                <div class="class @if ( $formation->type == 3 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/class-virtual-icon.svg') }}" alt="E-learning">
                    </div>
                    Classe Virtuelle
                </div>
            </div>
            <div class="information-details">
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-hand.svg') }}" alt="">
                        </div>
                        <span>Prise en charge</span>
                    </div>
                    <div class="detail-tags">
                        <div class="tage">
                            DPC
                        </div>
                        <div class="tage">
                            Crédit d’impôt
                        </div>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-list.svg') }}" alt="">
                        </div>
                        <span>100% pris en charge sans avance de frais</span>
                    </div>
                    <div class="tips">
                        <a href="#">
                            <img src="{{ asset('assets/svg/tips.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-money.svg') }}" alt="">
                        </div>
                        <span>360€ d’indemnisation en exercice libéral</span>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-ressources.svg') }}" alt="">
                        </div>
                        <span>Ressources, mémento et fiches pratiques</span>
                    </div>
                </div>
                <div class="detail">
                    <div class="detail-text">
                        <div class="detail-icon">
                            <img src="{{ asset('assets/svg/detail-duration.svg') }}" alt="">
                        </div>
                        <span>8h de vidéo à visionner où vous voulez</span>
                    </div>
                </div>
            </div>
            @guest 
            <div class="floating-btn">
                <div wire:click="login" class="btn-org" style="margin-top: 20px;">
                    Se connecter
                </div>
                <div wire:click="register" class="btn-org-no-border">
                    S’inscrire en E-learning
                </div>
            </div>
            @else
                <div class="floating-btn">
                    <div wire:click="payment" class="btn-org" style="margin-top: 20px;">
                        Acheter cette formation
                    </div>
                </div>
            @endguest
            <hr>
            <div class="info-ref-wrap">
                <div class="info-ref">
                    Réf. action DPC : <span> 96952425089</span>
                </div>
                <div class="info-ref">
                    N° organisme DPC : <span> 9695</span>
                </div>
            </div>
            <div class="info-help">
                <p>
                    Nos conseillers vous accompagnent pour vos formalités administratives !
                </p>
            </div>
            <div class="info-supp">
                Contactez nous au <div class="phone">
                    02 22 44 42 11
                </div>
            </div>
        </div>
    </div>

    <!-- payment  -->
    <div class="class-details-instructor-inner" @if ($display != 'payment') style="display: none" @endif >
        <div class="r-side-floating">
            <div class="r-s-title">
                {{ $formation->title }}
            </div>
            <div class="format">
                Format
            </div>
            <div class="class-categories">
                <div class="class @if ( $formation->type == 1 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/e-learining-icon.svg') }}" alt="E-learning">
                    </div>
                    E-learning
                </div>
                <div class="class @if ( $formation->type == 2 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/presentiel-icon.svg') }}" alt="E-learning">
                    </div>
                    Présentiel
                </div>
                <div class="class @if ( $formation->type == 3 ) selected @endif ">
                    <div class="class-icon">
                        <img src="{{ asset('assets/svg/class-virtual-icon.svg') }}" alt="E-learning">
                    </div>
                    Classe Virtuelle
                </div>
            </div>
            

            <div class="packs-select" style="display: {{ count($formation->packs) == 0 ? 'none' : '' }}">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Pack</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $formation->packs->sortBy('price') as $key => $pack )
                            <tr>
                                <td>
                                    <input type="radio" name="pack_id" value="{{ $pack->price }}" wire:model="amount"  >
                                </td>
                                <td>{{ $pack->title }}</td>
                                <td>{{ $pack->price }}.00DH</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <hr>

            <section class="payment-content" style="display: {{ $amount ? 'block' : 'none' }};" id="payment-content">
                <div class="payment-method">
                    <label for="payment_method">Moyen de payement</label>
                    <select wire:model="payment_method" name="payment_method" id="payment_method" >
                        <option value="virement" selected>Virement / Versement</option>
                        <option value="cheque">Chéque</option>
                        <option value="espece">Espèce</option>
                        <option value="prise_en_charge">Prise en charge</option>
                        <option value="credit_card">Credit card</option>
                    </select>
                </div>

                <div id="virement" class="payment-content" @if ( $payment_method != 'virement' ) style="display: none" @endif )>
                    <p>Au profit de <strong>Science Events</strong></p>
                    <p>Domiciliée chez <strong>ATTIJARIWAFA BANK</strong></p>
                    <p>RIB: <strong>007 450 0015 2080 000 000 4997</strong></p>
                    <p>Merci d'envoyer une copie de Virement ou Versement par :</p>
                    <ul>
                        <a href="mailto:contact@science-events.ma" target="_blank">Email : <strong>contact@science-events.ma</strong></a><br>
                        <a href="https://wa.me/212700443555" target="_blank">Whatsapp : <strong>0700 443 555</strong></a>
                    </ul>
                    <p>Merci de demander a votre banquier de <strong>préciser le nom de médecin participant</strong> dans le motif.</p>
                    <p>Le nom de bénéficiaire de la formation doit être <strong>noté clairement</strong> dans le reçu de réglement que vous envoyez</p>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>

                <div id="cheque" class="payment-content" @if ( $payment_method != 'cheque' ) style="display: none" @endif   >
                    <p>Au profit de <strong>Science Events</strong></p>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>

                <div id="espece" class="payment-content" @if ( $payment_method != 'espece' ) style="display: none" @endif >
                    <p>Adresse :</p>
                    <p>Koutoubia Center 2, Av. Hassane 2, Guéliz - Marrakech</p>
                    <p>Les inscriptions ne sont ni annulables ni remboursables</p>
                </div>

                <div id="prise_en_charge" class="payment-content" @if ( $payment_method != 'prise_en_charge' ) style="display: none" @endif >
                    <label>Nom de laboratoire*</label>
                    <input type="text" class="form-control" wire:model="laboratory_name"><br>
                    <p style="line-height: 20px;">
                        Pour les laboratoires en compte, envoyez un bon de commande à : <a href="mailto:contact@science-events.ma"><b>contact@science-events.ma</b></a><br>
                        Si non, la totalité du règlement doit être payé avant le jour de la formation.<br>
                        Les inscriptions ne sont ni annulables ni remboursables
                    </p>
                </div>

                <div id="credit_card" class="payment-content" @if ( $payment_method != 'credit_card' ) style="display: none" @endif >
                    <p style="line-height: 20px;">
                        Pour les payements en ligne, cliquez sur le bouton ci-dessous pour être redirigé vers la page de payement.<br>
                        <a href="#"><div class="btn-org">Payer en ligne ({{ $amount }} DH)</div></a>
                    </p>
                </div>

                <div class="floating-btn" @if ( $payment_method == 'credit_card' ) style="display: none;" @else style="display:block;" @endif >
                    <div wire:click="confirmPayment" class="btn-org" style="margin-top: 20px;">
                        Confirmer le payement
                    </div>
                </div>
            </section>

            <div  id="alert-message"  style='@if ( $amount > 0 ) display:none; @else display:block; @endif color: red; text-align: center; font-size: 1em; font-weight: bold;'>Veuillez selectionner un pack d'abord</div>
            
            
            



            <div class="floating-btn">
                <div wire:click="back" class="btn-org" style="margin-top: 20px;">
                    Retour
                </div>
            </div>
            
        </div>
    </div>

    <!-- Login form  -->
    <div class="class-details-instructor-inner" @if ($display != 'login') style="display: none" @endif )>
        <div class="r-side-floating">
            <div class="r-s-title">
                Se connecter
            </div>
            <div class="format">
                <p>
                    Vous n'avez pas de compte ? <a wire:click="register" href="javascript:;"><u>Inscrivez-vous gratuitement</u></a>
                </p>
            </div>
            <div class="class-categories">
                <form action="{{ route('voyager.login') }}" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <div class="floating-btn">
                        <div class="btn-org" style="margin-top: 20px;">
                            Se connecter
                        </div>
                    </div>
                </form>
            </div>

            <div class="floating-btn">
                <div wire:click="back" class="btn-org" style="margin-top: 20px;">
                    Retourne
                </div>
            </div>

            <hr>
        </div>
    </div>

    <!-- Register form  -->
    <div class="class-details-instructor-inner" @if ($display != 'register') style="display: none" @endif )>
        <div class="r-side-floating">
            <div class="r-s-title">
                S'inscrire en E-learning
            </div>
            <div class="format">
                <p>
                    Vous avez déjà un compte ?  <a wire:click="login" href="javascript:;"><u>Se connecter</u></a>
                </p>
            </div>
            <div class="class-categories">
                <form action="{{ route('voyager.login') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Mot de passe">  
                    <div class="floating-btn">
                        <div class="btn-org" style="margin-top: 20px;">
                            S'inscrire
                        </div>
                    </div>
                </form>
            </div>

            <hr>

            <div class="floating-btn">
                <div wire:click="back" class="btn-org" >
                    Retourne
                </div>
            </div>

        </div>
    </div>
    







    <style>
        .r-side-floating input[type="text"], 
        .r-side-floating input[type="password"], 
        .r-side-floating select, 
        .r-side-floating input[type="email"]
        {
            width: 100%;
            height: 40px;
            padding: 3px 5px;
            border-radius: 5px;
            outline: none;
            border: 1px solid grey;
            margin-bottom: 10px;
        }
        .r-side-floating input[type="radio"]{
            display: block;
        }
        .r-side-floating td {
            font-size: 15px;
            padding: 5px;
            line-height: 15px;
        }
        div.payment-content p {
            font-size: 15px !important;
            line-height: 15px;
        }
        div.payment-content ul a  {
            font-size: 15px !important;
            line-height: 15px;
        }

    </style>
</div>