<section class="banner">
			<div class="bg-parallax bg-1"></div>
			<div class="container">
				<div class="logo-banner text-center">
					<a href="" title=""><img src="../images/logo-banner.png" alt=""></a>
				</div>
				<div class="banner-cn">
					<ul class="tabs-cat text-center row" style="padding-left: 120px;">
						<li class="cate-item col-xs-2"><a data-toggle="tab"
							href="#form-flight" title=""><span>flight</span> <img
								src="../images/icon-flight.png" alt=""></a></li>
						<li class="cate-item active col-xs-2"><a data-toggle="tab"
							href="#form-hotel" title=""><span>Hotel</span><img
								src="../images/icon-hotel.png" alt=""></a></li>
						<li class="cate-item col-xs-2"><a data-toggle="tab"
							href="#form-car" title=""><span>Car</span><img
								src="../images/icon-car.png" alt=""></a></li>
						<li class="cate-item col-xs-2"><a data-toggle="tab"
							href="#form-package" title=""><span>package deals</span><img
								src="../images/icon-tour.png" alt=""></a></li>
						
						<li class="cate-item col-xs-2"><a data-toggle="tab"
							href="#form-tour" title=""><span>TOUR</span><img
								src="../images/icon-vacation.png" alt=""></a></li>
					</ul>
					<div class="tab-content" >
						<div class="form-cn form-hotel tab-pane active in" id="form-hotel">
							<h2>Where would you like to go?</h2>
							<div class="form-search clearfix">
								<div class="form-field field-destination">
									<label for="destination"><span>Destination:</span> Country,
										City, Airport, Area, Landmark</label><input type="text"
										id="destination" class="field-input">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Check in">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Check out">
								</div>
								<div class="form-field field-select">
									<div class="select">
										<span>Guest</span><select><option>Guest</option>
											<option>1 Guest</option>
											<option>2 Guest</option>
											<option>3 Guest</option></select>
									</div>
								</div>
								<div class="form-submit">
									<button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
								</div>
							</div>
						</div>
						<div class="form-cn form-car tab-pane" id="form-car">
							<h2>Where would you like to go?</h2>
							<div class="form-search clearfix">
								<div class="form-field field-picking">
									<label for="picking"><span>Picking up:</span> City, airport...</label><input
										type="text" id="picking" class="field-input">
								</div>
								<div class="form-field field-droping">
									<input type="text" class="field-input"
										placeholder="Droping off">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Pink up date">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Drop off date">
								</div>
								<div class="form-submit">
									<button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
								</div>
							</div>
						</div>
						
						<div class="form-cn form-flight tab-pane" id="form-flight">
							<h2>Where would you like to go?</h2>
							<div class="form-search clearfix">
								<div class="form-field field-from">
									<label for="flight-from"><span>Flight from:</span> Airport</label><input
										type="text" name="flightfrom" id="flight-from"
										class="field-input">
								</div>
								<div class="form-field field-to">
									<label for="flight-to"><span>To :</span> Country, Airpor</label><input
										type="text" id="flight-to" class="field-input">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Departing">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Returning">
								</div>
								<div class="form-field field-select field-adult">
									<div class="select">
										<span>Adults</span><select><option>Adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-field field-select field-children">
									<div class="select">
										<span>Children</span><select><option>Children</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-submit">
									<button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
								</div>
							</div>
						</div>
						<div class="form-cn form-package tab-pane" id="form-package">
							<h2>Where would you like to go?</h2>
							<ul class="form-radio">
								<li><div class="radio-checkbox">
										<input type="radio" name="radio-1" id="radio-1" class="radio"><label
											for="radio-1">Flight + Hotel</label>
									</div></li>
								<li><div class="radio-checkbox">
										<input type="radio" name="radio-1" id="radio-2" class="radio"><label
											for="radio-2">Flight + Hotel +Car</label>
									</div></li>
								<li><div class="radio-checkbox">
										<input type="radio" name="radio-1" id="radio-3" class="radio"><label
											for="radio-3">Hotel +Car</label>
									</div></li>
								<li><div class="radio-checkbox">
										<input type="radio" name="radio-1" id="radio-4" class="radio"><label
											for="radio-4">Flight +Car</label>
									</div></li>
							</ul>
							<div class="form-search clearfix">
								<div class="form-field field-from">
									<label for="filghtfrom"><span>Flight From:</span> Airport...</label><input
										type="text" id="filghtfrom" class="field-input">
								</div>
								<div class="form-field field-to">
									<label for="flightto"><span>To:</span> Country, Airport</label><input
										type="text" id="flightto" class="field-input">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Departing">
								</div>
								<div class="form-field field-date">
									<input type="text" class="field-input calendar-input"
										placeholder="Returning">
								</div>
								<div class="form-field field-select field-adults">
									<div class="select">
										<span>Adults</span><select><option>Adults</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-field field-select field-children">
									<div class="select">
										<span>Children</span><select><option>Children</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-submit">
									<button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
								</div>
							</div>
						</div>
						<div class="form-cn form-tour tab-pane" id="form-tour">
							<h2>Where would you like to go?</h2>
							<div class="form-search clearfix">
								<div class="form-field field-select field-region">
									<div class="select">
										<span>Region: <small>Wourldwide, africa..</small></span><select><option>Africa</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-field field-select field-country">
									<div class="select">
										<span>Country</span><select><option>Country</option>
											<option>Viet Nam</option>
											<option>Thai Lan</option></select>
									</div>
								</div>
								<div class="form-field field-select field-style">
									<div class="select">
										<span>Tour Style</span><select><option>Style One</option>
											<option>1</option>
											<option>2</option>
											<option>3</option></select>
									</div>
								</div>
								<div class="form-submit">
									<button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>