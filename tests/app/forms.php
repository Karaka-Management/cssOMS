<div class="row">
    <div class="col-xs-12">
        <section class="portlet">
            <form>
                <div class="portlet-head">Default</div>
                <div class="portlet-body">
                    <div class="form-group">
                        <label>Placeholder</label>
                        <input type="text" placeholder="&#61447; User">
                    </div>

                    <div class="form-group">
                        <label>Disabled</label>
                        <input type="text" value="Some value" disabled>
                    </div>

                    <div class="form-group">
                        <label>Input+Button+Required</label>
                        <div class="ipt-wrap">
                            <div class="ipt-first"><input type="text" required></div>
                            <div class="ipt-second"><input type="submit" value="Text"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}">
                    </div>

                    <div class="form-group">
                        <label>Datalist</label>
                        <input list="test" type="text">
                        <datalist id="test">
                            <option>Chrome</option>
                            <option>IE</option>
                            <option>Opera</option>
                            <option>Safari</option>
                            <option>Firefox</option>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label>Special</label>
                            <div>
                                <div class="ipt-wrap">
                                    <div class="ipt-first">
                                        <span class="input"><button type="button"><i class="fa fa-pencil"></i></button>
                                        <input type="text"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-control">
                            <label>Number</label>
                            <input type="number" step="any" min="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label>Label1</label>
                            <input type="text">
                        </div>

                        <div class="input-control">
                            <label>Pattern Validation</label>
                            <input type="text" pattern="[a-zA-Z]" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label>Datetime</label>
                            <input type="datetime">
                        </div>

                        <div class="input-control">
                            <label>Localtime</label>
                            <input type="datetime-local">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label>Checkbox</label>
                            <div>
                                <label class="checkbox" for="checkbox1">
                                    <input id="checkbox1" type="checkbox" name="name1" value="1">
                                    <span class="checkmark"></span>
                                    Check1
                                </label>

                                <label class="checkbox" for="checkbox2">
                                    <input id="checkbox2" type="checkbox" name="name2" value="2">
                                    <span class="checkmark"></span>
                                    Check2
                                </label>
                            </div>
                        </div>
                        <div class="input-control">
                            <label>Radio</label>
                            <div>
                                <label class="radio" for="radio1">
                                    <input id="radio1" type="radio" name="radioName" value="1">
                                    <span class="checkmark"></span>
                                    Radio1
                                </label>

                                <label class="radio" for="radio2">
                                    <input id="radio2" type="radio" name="radioName" value="2">
                                    <span class="checkmark"></span>
                                    Radio2
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Option</label>
                        <select>
                            <option>Option1</option>
                            <option>Option2</option>
                            <option>Option3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Multiselect</label>
                        <select multiple>
                            <option>Option1</option>
                            <option>Option2</option>
                            <option>Option3</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="input-control">
                            <label>Option Default</label>
                            <select>
                                <option disabled selected>Select something</option>
                                <option>Option1</option>
                                <option>Option2</option>
                                <option>Option3</option>
                            </select>
                        </div>

                        <div class="input-control">
                            <label>Select Selected</label>
                            <select>
                                <option>Option1</option>
                                <option selected>Option2</option>
                                <option>Option3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Textarea</label>
                        <textarea></textarea>
                    </div>
                </div>
                <div class="portlet-foot">
                    <input type="submit" value="Submit"> <input type="submit" value="Cancel"> <button type="submit">SButton</button>
                </div>
            </form>
        </section>
    </div>
</div>