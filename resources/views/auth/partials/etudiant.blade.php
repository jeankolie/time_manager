<form action="/login-etudiant" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Matricule:</label>
                                        <input class="form-control" type="text" id="emailaddress" placeholder="Entrer votre identifiant" name="matricule" value="{{ old('matricule') }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Password:</label>
                                        <input class="form-control" type="password" id="password" placeholder="Entrer votre mot de pass" name="password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Se souvenir de moi</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>