

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 gtco-heading text-center">
                <h2>{{$sections[2]->titre}}</h2>
                <p>{{$sections[2]->sous_titre}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form action="#">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="message"></label>
                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn btn-special" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-md-push-1">
                <div class="gtco-contact-info">
                    <h3>{{$coordonnees[0]->titre}}</h3>
                    <p>{{$coordonnees[0]->sous_titre}}</p>
                    <ul >
                        <li class="address">{{$coordonnees[0]->info1}}</li>
                        <li class="phone"><a href="tel://1234567890">{{$coordonnees[0]->info2}}</a></li>
                        <li class="email"><a href="#">{{$coordonnees[0]->info3}}</a></li>
                        <li class="url"><a href="#">{{$coordonnees[0]->info4}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END .gtco-services -->