@extends('admin.common.common')
@section('content')
        <div class="container">

            <div class="mws-report-container clearfix">
                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-building"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Floors Climbed</span>
                            <span class="mws-report-value">324</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-sport"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Calories Burned</span>
                            <span class="mws-report-value down">74%</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-walk"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Kilometers Walked</span>
                            <span class="mws-report-value">14</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-bug"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Bugs Fixed</span>
                            <span class="mws-report-value up">22%</span>
                        </span>
                </a>

                <a class="mws-report" href="#">
                    <span class="mws-report-icon mws-ic ic-car"></span>
                    <span class="mws-report-content">
                        	<span class="mws-report-title">Cars Repaired</span>
                            <span class="mws-report-value">77</span>
                        </span>
                </a>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-list">Inline Form</span>
                </div>
                <div class="mws-panel-body">
                    <form class="mws-form" action="http://www.malijuwebshop.com/themes/mws-admin/form_layouts.html">
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label>Small text field</label>
                                <div class="mws-form-item small">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Medium text field</label>
                                <div class="mws-form-item medium">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Large text field</label>
                                <div class="mws-form-item large">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Textarea</label>
                                <div class="mws-form-item large">
                                    <textarea rows="100%" cols="100%"></textarea>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Dropdown List</label>
                                <div class="mws-form-item small">
                                    <select>
                                        <option>Option 1</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Checkboxes</label>
                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list inline">
                                        <li><input type="checkbox" /> <label>Checkbox 1</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 2</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 3</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 4</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Radio Buttons</label>
                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list inline">
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Submit" class="mws-button green" />
                            <input type="submit" value="Submit" class="mws-button red" />
                            <input type="submit" value="Submit" class="mws-button blue" />
                            <input type="submit" value="Submit" class="mws-button orange" />
                            <input type="submit" value="Submit" class="mws-button gray" />
                            <input type="submit" value="Submit" class="mws-button black" />
                            <input type="submit" value="Disabled" class="mws-button gray" disabled="disabled" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-list">Block Form</span>
                </div>
                <div class="mws-panel-body">
                    <form class="mws-form" action="http://www.malijuwebshop.com/themes/mws-admin/form_layouts.html">
                        <div class="mws-form-block">
                            <div class="mws-form-row">
                                <label>Small text field</label>
                                <div class="mws-form-item small">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Medium text field</label>
                                <div class="mws-form-item medium">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Large text field</label>
                                <div class="mws-form-item large">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Textarea</label>
                                <div class="mws-form-item large">
                                    <textarea rows="100%" cols="100%"></textarea>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Dropdown List</label>
                                <div class="mws-form-item small">
                                    <select>
                                        <option>Option 1</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Checkboxes</label>
                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list">
                                        <li><input type="checkbox" /> <label>Checkbox 1</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 2</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 3</label></li>
                                        <li><input type="checkbox" /> <label>Checkbox 4</label></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Radio Buttons</label>
                                <div class="mws-form-item clearfix">
                                    <ul class="mws-form-list">
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                        <li><input type="radio" /> <label>Radio 1</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Submit" class="mws-button green" />
                            <input type="submit" value="Submit" class="mws-button red" />
                            <input type="submit" value="Submit" class="mws-button blue" />
                            <input type="submit" value="Submit" class="mws-button orange" />
                            <input type="submit" value="Submit" class="mws-button gray" />
                            <input type="submit" value="Submit" class="mws-button black" />
                            <input type="submit" value="Disabled" class="mws-button gray" disabled="disabled" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-sign-post">Form with Wizard Navigation</span>
                </div>
                <div class="mws-panel-body">
                    <div class="mws-wizard clearfix">
                        <ul>
                            <li>
                                <a class="mws-ic-16 ic-accept" href="#">Past Steps</a>
                            </li>
                            <li class="current">
                                <a href="#" class="mws-ic-16 ic-delivery">Current Step</a>
                            </li>
                            <li>
                                <a class="mws-ic-16 ic-user" href="#">Next Steps</a>
                            </li>
                            <li>
                                <a class="mws-ic-16 ic-direction" href="#">Next Steps</a>
                            </li>
                        </ul>
                    </div>
                    <form class="mws-form" action="http://www.malijuwebshop.com/themes/mws-admin/form_layouts.html">
                        <div class="mws-form-inline">
                            <div class="mws-form-row">
                                <label>Title</label>
                                <div class="mws-form-item large">
                                    <input type="text" class="mws-textinput" />
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Article</label>
                                <div class="mws-form-item large">
                                    <textarea rows="100%" cols="100%"></textarea>
                                </div>
                            </div>
                            <div class="mws-form-row">
                                <label>Category</label>
                                <div class="mws-form-item large">
                                    <select>
                                        <option>Option 1</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Prev" class="mws-button gray left" />
                            <input type="submit" value="Next" class="mws-button green" />
                        </div>
                    </form>
                </div>
            </div>

            <div class="mws-panel grid_8">
                <div class="mws-panel-header">
                    <span class="mws-i-24 i-speech-bubble-2">Form Messages</span>
                </div>
                <div class="mws-panel-body">
                    <form class="mws-form" action="http://www.malijuwebshop.com/themes/mws-admin/form_layouts.html">
                        <div class="mws-form-message error">
                            This is an error message
                            <ul>
                                <li>You are too fast</li>
                                <li>You are too slow</li>
                            </ul>
                        </div>
                        <div class="mws-form-message success">
                            This is a success message
                            <ol>
                                <li>You are too good</li>
                                <li>You are too smart</li>
                            </ol>
                        </div>
                        <div class="mws-form-message info">
                            This is an info message
                        </div>
                        <div class="mws-form-message warning">
                            This is a warning message
                        </div>

                        <div class="mws-form-block">
                            <div class="mws-form-row">
                                <label>Text field Error</label>
                                <div class="mws-form-item large">
                                    <input type="text" class="mws-textinput error" />
                                    <div class="mws-error">
                                        This field is required
                                    </div>
                                </div>
                            </div>

                            <div class="mws-form-row">
                                <label>Select Error</label>
                                <div class="mws-form-item large">
                                    <select class="error">
                                        <option>Option 1</option>
                                        <option>Option 3</option>
                                        <option>Option 4</option>
                                        <option>Option 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mws-form-row">
                                <label>Textarea Error</label>
                                <div class="mws-form-item large">
                                    <textarea rows="100%" cols="100%" class="error"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mws-button-row">
                            <input type="submit" value="Submit" class="mws-button green" />
                            <input type="submit" value="Submit" class="mws-button red" />
                            <input type="submit" value="Submit" class="mws-button blue" />
                            <input type="submit" value="Submit" class="mws-button orange" />
                            <input type="submit" value="Submit" class="mws-button gray" />
                            <input type="submit" value="Submit" class="mws-button black" />
                            <input type="submit" value="Disabled" class="mws-button gray" disabled="disabled" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop
