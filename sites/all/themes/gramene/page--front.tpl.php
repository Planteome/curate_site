<div id="section-header">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-2">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" id="menu-logo"><img class="img-responsive" src="<?php echo $logo;  ?>" /></a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 search">
				<div>
				<?php print render($page['header']); ?>
					<!-- <input type="text" class="form-control" placeholder="Search for genes, species, pathways, ontology terms, domains…">s -->
				</div>
			</div>
			<div class="col-md-1 col-sm-1 middle-btn">
				<button id="search-help-button" role="button" aria-haspopup="true" aria-expanded="false" type="button" class="dropdown-toggle btn btn-default" data-reactid="12"><span class="glyphicon glyphicon-question-sign" data-reactid="13"></span></button>
			</div>
			<div class="col-md-3 col-sm-3 search-drp">
				<div class="dropdown btn-group" data-reactid="44">
				<button id="genomes-of-interest-dropdown" role="button" aria-haspopup="true" aria-expanded="false" type="button" class="dropdown-toggle btn btn-default" data-reactid="45"><div class="results-summary" data-reactid="46"><span class="gene-count" data-reactid="47"><strong class="">1751769</strong><!-- react-text: 52 --> genes<!-- /react-text --></span><span class="join" data-reactid="53"> in </span><span class="genomes-count" data-reactid="54"><strong class="">44</strong><!-- react-text: 59 --> genomes<!-- /react-text --></span></div><!-- react-text: 60 --> <!-- /react-text --><span class="caret" data-reactid="61"></span></button><ul role="menu" class="dropdown-menu" aria-labelledby="genomes-of-interest-dropdown" data-reactid="62"><li role="presentation" class="active" data-reactid="63"><a role="menuitem" tabindex="-1" href="#" data-reactid="64">Show All Species</a></li><li role="separator" class="divider" data-reactid="65"></li><li role="presentation" class="" data-reactid="66"><a role="menuitem" tabindex="-1" href="#" data-reactid="67">Pick Species from List</a></li></ul></div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="top">
<div class="container bg-color">
	<div class="row">
		<div class="col-md-12 col-sm-12">
		  <div class="alert">
			<h4 class="gramene_txt">Gramene is a curated, open-source, integrated data resource for comparative functional genomics in crops and model plant species.</h4>
			</div>
		</div>
		
	</div>	
</div>
</div> -->
<!-- <div class="main-grid">
<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-9 feids">
			<div class="row">
	<h3 data-reactid="75">Gramene Portals</h3>
				<div class="col-md-6 col-sm-6">
				<div class="row pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive" src="sites/all/themes/gramene/images/ensemblgramene.png"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
					<div class="row pad_01">
						<div class="col-md-4 col-sm-4">
							<img class="img-responsive" src="sites/all/themes/gramene/images/tools.png"/>
						</div>
						<div class="col-md-8 col-sm-8">
							<h4>Genome Browser</h4>
							<p>Browse genomes with annotations, variation and comparative tools</p>
						</div>
					</div>	
					<div class="row pad_01">
						<div class="col-md-4 col-sm-4">
							<img class="img-responsive" src="sites/all/themes/gramene/images/BLAST.png"/>
						</div>
						<div class="col-md-8 col-sm-8">
							<h4>Genome Browser</h4>
							<p>Browse genomes with annotations, variation and comparative tools</p>
						</div>
					</div>	
					<div class="row pad_01">
						<div class="col-md-4 col-sm-4">
							<img class="img-responsive" src="sites/all/themes/gramene/images/TrackHub.png"/>
						</div>
						<div class="col-md-8 col-sm-8">
							<h4>Genome Browser</h4>
							<p>Browse genomes with annotations, variation and comparative tools</p>
						</div>
					</div>	
					<div class="row pad_01">
						<div class="col-md-4 col-sm-4">
							<img class="img-responsive" src="sites/all/themes/gramene/images/download.png"/>
						</div>
						<div class="col-md-8 col-sm-8">
							<h4>Genome Browser</h4>
							<p>Browse genomes with annotations, variation and comparative tools</p>
						</div>
					</div>	
					</div>
				<div class="col-md-6 col-sm-6">
					<div class="row pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive" src="sites/all/themes/gramene/images/plantReactome.png"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
				<div class="row marg_10 pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive" src="sites/all/themes/gramene/images/ExpressionAtlas.png"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
				<div class="row pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive pad01" src="sites/all/themes/gramene/images/Biomart250.png"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
				<div class="row marg_10 pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive" src="sites/all/themes/gramene/images/noun_553934.png"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
				<div class="row marg_10 pad_01">
					<div class="col-md-4 col-sm-4">
						<img class="img-responsive pad00" src="sites/all/themes/gramene/images/archive.jpg"/>
					</div>
					<div class="col-md-8 col-sm-8">
						<h4>Genome Browser</h4>
						<p>Browse genomes with annotations, variation and comparative tools</p>
					</div>
				</div>
				</div>	
			</div>
		</div>

		<div class="col-md-3 col-sm-3 news">
		<h3>Latest News</h3>
		<ul class="posts list-unstyled" style="overflow: auto; height: 600px;">
				<li><a>Half-day workshop on bioinformatics tools for Plant Genomics (Nov. 29, Noon-5PM)</a><br><span>Fri, 18 Aug 2017</span></li>
				<li><a>The Gramene Database build 54 is out!</a><br><span>Mon, 17 Jul 2017</span></li>
				<li><a>Highlights from the 9th Asian Crop Science Association Conference, June 5-7, Jeju, Korea</a><br><span>Thu, 15 Jun 2017</span></li>
				<li><a>Detailed new ‘reference’ genome for maize shows the plant has deep resources for continued adaptation</a><br><span>Mon, 12 Jun 2017</span></li>
				<li><a>Gramene is getting ready for the Plant Biology Conference 2017 — See you in Honolulu!</a><br><span>Fri, 09 Jun 2017</span></li>
				<li><a>Fascination of Plants Day 2017 — Let’s talk about plant superpowers!</a><br><span>Tue, 06 Jun 2017</span></li>
				<li><a>The Gramene Database build 53 is out!</a><br><span>Sun, 21 May 2017</span></li>
				<li><a>Let’s talk about plant superpowers!</a><br><span>Tue, 16 May 2017</span></li>
				<li><a>Job openings at Gramene - Computational Science Developer</a><br><span>Thu, 11 May 2017</span></li>
				<li><a>Gramene is present at The Biology of Genomes Conference 2017</a><br><span>Thu, 11 May 2017</span></li>
				<li><a>What's New with Gramene? An Overview - Webinar May 9, 2017 @ 2 pm EDT</a><br><span>Fri, 28 Apr 2017</span></li>
				<li><a>Plant Breeding for Drought Tolerance, Online course - Fall 2017</a><br><span>Wed, 26 Apr 2017</span></li>
				<li><a>Agricultural Data Curation Survey -- Your feedback matters!</a><br><span>Wed, 26 Apr 2017</span></li>
				<li><a>Notes from  Biocuration 2017  conference </a><br><span>Thu, 06 Apr 2017</span></li>
				<li><a>Gramene webinar 11th April 2017: Overview, updates and new fireworks display in Plant Reactome</a><br><span>Mon, 03 Apr 2017</span></li>
				<li><a>Gramene at the 2017 Maize Genetics Pre-Conference Workshops</a><br><span>Wed, 08 Mar 2017</span></li>
				<li><a>Everything you wanted to know about plants synteny! -- Join our Gramene Webinar on February 7th</a><br><span>Thu, 26 Jan 2017</span></li>
				<li><a>Gramene is attending the PAG Conference 2017 — See you in San Diego!</a><br><span>Tue, 03 Jan 2017</span></li>
				<li><a>GARNet newsletter available for download</a><br><span>Wed, 28 Dec 2016</span></li>
				<li><a>Illinois Corn Breeders' School, March 6-7, 2017</a><br><span>Thu, 22 Dec 2016</span></li>
				<li><a>The Second International Setaria Genetics Conference-2017</a><br><span>Tue, 20 Dec 2016</span></li>
				<li><a>Gramene Webinar December 2016: Converting genomic coordinates between reference assemblies</a><br><span>Tue, 22 Nov 2016</span></li>
				<li><a>Programming for Biology 2016: Gramene’s Continued Commitment to Enabling Science Through Education</a><br><span>Tue, 15 Nov 2016</span></li>
				<li><a>The Gramene Database build 52 is out!</a><br><span>Mon, 14 Nov 2016</span></li>
				<li><a>Gramene Webinar Nov, 2016: Analysis and visualization of the plant gene Expression ATLAS data</a><br><span>Tue, 08 Nov 2016</span></li>
				<li><a>Tools, technology, and analyses: All present and accounted for at Genome Informatics 2016</a><br><span>Wed, 26 Oct 2016</span></li>
				<li><a>Highlights of 14th ISRFG Conference, 26-29 Sept 2016 </a><br><span>Tue, 25 Oct 2016</span></li>
				<li><a>Branching out at CSHL: adding plant genomics to statistics and math as an URP*</a><br><span>Wed, 05 Oct 2016</span></li>
				<li><a>Highlights of the 13th SolGenomics Conference 2016 </a><br><span>Fri, 30 Sep 2016</span></li>
				<li><a>Highlights of the 2016 GODAN Summit</a><br><span>Tue, 27 Sep 2016</span></li>
				<li><a href="http://news.gramene.org/blog">Visit our blog</a></li>
		</ul>
		</div>
	</div>
</div>
</div> -->
<div class="Species">
<div classs="container">
	<div class="row">
		<dir class="col-sm-6 col-md-6">
			<div class="tinted-box no-top-margin">
<div id="SpeciesSearch" class="js_panel">
	<input type="hidden" class="panel_type" value="SearchBox">
	<form action="/Multi/psychic" method="get" class="clear search-form homepage-search-form">
		<fieldset>
			<input value="ensemblunit" name="site" type="hidden">
			<div class="form-field ff-multi">
				<label for="species" class="ff-label">Search:</label>
				<div class="ff-inline ff-right"><span class="inp-group">
					<select name="species" class="fselect input" id="species">
						<option value="">All species</option>
						<option disabled="disabled" value="">---</option>
						<optgroup label="Favourite species">
							<option value="Arabidopsis_thaliana">Arabidopsis thaliana</option>
							<option value="Oryza_sativa">Oryza sativa Japonica</option>
							<option value="Triticum_aestivum">Triticum aestivum</option>
							<option value="Hordeum_vulgare">Hordeum vulgare</option>
							<option value="Zea_mays">Zea mays</option>
							<option value="Physcomitrella_patens">Physcomitrella patens</option>
						</optgroup>
						<option disabled="disabled" value="">---</option>
						<option value="Aegilops_tauschii">Aegilops tauschii</option>
						<option value="Amborella_trichopoda">Amborella trichopoda</option>
						<option value="Arabidopsis_lyrata">Arabidopsis lyrata</option>
						<option value="Arabidopsis_thaliana">Arabidopsis thaliana</option>
						<option value="Beta_vulgaris">Beta vulgaris subsp. vulgaris</option>
						<option value="Brachypodium_distachyon">Brachypodium distachyon</option>
						<option value="Brassica_napus">Brassica napus</option>
						<option value="Brassica_oleracea">Brassica oleracea</option>
						<option value="Brassica_rapa">Brassica rapa</option>
						<option value="Chlamydomonas_reinhardtii">Chlamydomonas reinhardtii</option>
						<option value="Chondrus_crispus">Chondrus crispus</option>
						<option value="Cyanidioschyzon_merolae">Cyanidioschyzon merolae</option>
						<option value="Galdieria_sulphuraria">Galdieria sulphuraria</option>
						<option value="Glycine_max">Glycine max</option>
						<option value="Hordeum_vulgare">Hordeum vulgare</option>
						<option value="Leersia_perrieri">Leersia perrieri</option>
						<option value="Medicago_truncatula">Medicago truncatula</option>
						<option value="Musa_acuminata">Musa acuminata</option>
						<option value="Oryza_barthii">Oryza barthii</option>
						<option value="Oryza_brachyantha">Oryza brachyantha</option>
						<option value="Oryza_glaberrima">Oryza glaberrima</option>
						<option value="Oryza_glumaepatula">Oryza glumaepatula</option>
						<option value="Oryza_longistaminata">Oryza longistaminata</option>
						<option value="Oryza_meridionalis">Oryza meridionalis</option>
						<option value="Oryza_nivara">Oryza nivara</option>
						<option value="Oryza_punctata">Oryza punctata</option>
						<option value="Oryza_rufipogon">Oryza rufipogon</option>
						<option value="Oryza_indica">Oryza sativa Indica</option>
						<option value="Oryza_sativa">Oryza sativa Japonica</option>
						<option value="Ostreococcus_lucimarinus">Ostreococcus lucimarinus</option>
						<option value="Physcomitrella_patens">Physcomitrella patens</option>
						<option value="Populus_trichocarpa">Populus trichocarpa</option>
						<option value="Prunus_persica">Prunus persica</option>
						<option value="Selaginella_moellendorffii">Selaginella moellendorffii</option>
						<option value="Setaria_italica">Setaria italica</option>
						<option value="Solanum_lycopersicum">Solanum lycopersicum</option>
						<option value="Solanum_tuberosum">Solanum tuberosum</option>
						<option value="Sorghum_bicolor">Sorghum bicolor</option>
						<option value="Theobroma_cacao">Theobroma cacao</option>
						<option value="Trifolium_pratense">Trifolium pratense</option>
						<option value="Triticum_aestivum">Triticum aestivum</option>
						<option value="Triticum_urartu">Triticum urartu</option>
						<option value="Vitis_vinifera">Vitis vinifera</option>
						<option value="Zea_mays">Zea mays</option>
					</select>
					<label for="q">for</label>
				</span>
				<wbr>
					<span class="inp-group">
						<input value="" name="q" class="_string input inactive query optional ftext" id="q" type="text" size="30">
						<input value="Go" class="fbutton btn-primary" type="submit">
					</span>
					<wbr>
					</div>
					<div class="ff-notes">
						<p class="search-example">e.g. 
							<a class="nowrap" href="/Multi/psychic?q=Carboxy*;site=ensemblunit">Carboxy*</a> or <a class="nowrap" href="/Multi/psychic?q=chx28;site=ensemblunit">chx28</a></p>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
</div>

	<div class="Favourite genomes">
		<div class="row">
			<div class="plain-box">
				<h5>Favourite genomes</h5>
			<!-- <div class="col-sm-6 col-md-6"> -->
			 <?php print render($page['front_view']); ?> 
				<!-- <div class="row">
					<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="Arabidopsis_thaliana/Info/Index"><img class="img-responsive" src="sites/all/themes/gramene/images/Arabidopsis_thaliana.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href="Arabidopsis_thaliana/Info/Index"><p>Arabidopsis thaliana</p></a>
						<span>TAIR10</span>
					</div>
				</div>
				</div>
					<div class="row">
							<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="#"><img class="img-responsive" src="sites/all/themes/gramene/images/Triticum_aestivum.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href=""><p>Triticum aestivum</p></a>
						<span>TGACv1</span>
					</div>
					</div>
				</div>

					<div class="row">
							<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="#"><img class="img-responsive" src="sites/all/themes/gramene/images/Zea_mays.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href=""><p>Zea mays</p></a>
						<span>AGPv4</span>
					</div>
					</div>
				</div>
				
				
			</div>
			
			<div class="col-sm-6 col-md-6">
				<div class="row">
						<div class="species-box">
				<div class="col-md-4 col-sm-4">
						<a href="#"><img class="img-responsive" src="sites/all/themes/gramene/images/Oryza_sativa.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href=""><p>Oryza sativa Japonica</p></a>
						<span>IRGSP-1.0</span>
					</div>
				</div>
			</div>
					<div class="row">
							<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="#"><img class="img-responsive" src="sites/all/themes/gramene/images/Hordeum_vulgare.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href=""><p>AHordeum vulgare</p></a>
						<span>Hv_IBSC_PGSB_v2</span>
					</div>
				</div>
			</div>
				<div class="row">
						<div class="species-box">
					<div class="col-md-4 col-sm-4">
						<a href="#"><img class="img-responsive" src="sites/all/themes/gramene/images/Physcomitrella_patens.png"/></a>
					</div>
					<div class="col-md-8 col-sm-8">
						<a href=""><p>Physcomitrella patens</p></a>
						<span>ASM242v1</span>
					</div>
				</div>
			</div> -->
				
	<!-- 		</div> -->
			<div class="section-lower">
				<h3>All genomes</h3>
				<select class="_all_species">
					<option value="">-- Select a species --</option>
					<optgroup class="favourites" label="Favourites">
						<option value="/Arabidopsis_thaliana/Info/Index">Arabidopsis thaliana</option>
						<option value="/Oryza_sativa/Info/Index">Oryza sativa Japonica</option>
						<option value="/Triticum_aestivum/Info/Index">Triticum aestivum</option>
						<option value="/Hordeum_vulgare/Info/Index">Hordeum vulgare</option>
						<option value="/Zea_mays/Info/Index">Zea mays</option>
						<option value="/Physcomitrella_patens/Info/Index">Physcomitrella patens</option>
					</optgroup>
					<optgroup class="Liliopsida" label="Liliopsida">
						<option value="/Aegilops_tauschii/Info/Index">Aegilops tauschii</option>
						<option value="/Brachypodium_distachyon/Info/Index">Brachypodium distachyon</option>
						<option value="/Hordeum_vulgare/Info/Index">Hordeum vulgare</option>
						<option value="/Leersia_perrieri/Info/Index">Leersia perrieri</option>
						<option value="/Musa_acuminata/Info/Index">Musa acuminata</option>
						<option value="/Oryza_barthii/Info/Index">Oryza barthii</option>
						<option value="/Oryza_brachyantha/Info/Index">Oryza brachyantha</option>
						<option value="/Oryza_glaberrima/Info/Index">Oryza glaberrima</option>
						<option value="/Oryza_glumaepatula/Info/Index">Oryza glumaepatula</option>
						<option value="/Oryza_longistaminata/Info/Index">Oryza longistaminata</option>
						<option value="/Oryza_meridionalis/Info/Index">Oryza meridionalis</option>
						<option value="/Oryza_nivara/Info/Index">Oryza nivara</option>
						<option value="/Oryza_punctata/Info/Index">Oryza punctata</option>
						<option value="/Oryza_rufipogon/Info/Index">Oryza rufipogon</option>
						<option value="/Oryza_indica/Info/Index">Oryza sativa Indica</option>
						<option value="/Oryza_sativa/Info/Index">Oryza sativa Japonica</option>
						<option value="/Setaria_italica/Info/Index">Setaria italica</option>
						<option value="/Sorghum_bicolor/Info/Index">Sorghum bicolor</option>
						<option value="/Triticum_aestivum/Info/Index">Triticum aestivum</option>
						<option value="/Triticum_urartu/Info/Index">Triticum urartu</option>
						<option value="/Zea_mays/Info/Index">Zea mays</option>
					</optgroup>
					<optgroup class="eudicotyledons" label="eudicotyledons">
						<option value="/Arabidopsis_lyrata/Info/Index">Arabidopsis lyrata</option>
						<option value="/Arabidopsis_thaliana/Info/Index">Arabidopsis thaliana</option>
						<option value="/Beta_vulgaris/Info/Index">Beta vulgaris subsp. vulgaris</option>
						<option value="/Brassica_napus/Info/Index">Brassica napus</option>
						<option value="/Brassica_oleracea/Info/Index">Brassica oleracea</option>
						<option value="/Brassica_rapa/Info/Index">Brassica rapa</option>
						<option value="/Glycine_max/Info/Index">Glycine max</option>
						<option value="/Medicago_truncatula/Info/Index">Medicago truncatula</option>
						<option value="/Populus_trichocarpa/Info/Index">Populus trichocarpa</option>
						<option value="/Prunus_persica/Info/Index">Prunus persica</option>
						<option value="/Solanum_lycopersicum/Info/Index">Solanum lycopersicum</option>
						<option value="/Solanum_tuberosum/Info/Index">Solanum tuberosum</option>
						<option value="/Theobroma_cacao/Info/Index">Theobroma cacao</option>
						<option value="/Trifolium_pratense/Info/Index">Trifolium pratense</option>
						<option value="/Vitis_vinifera/Info/Index">Vitis vinifera</option>
					</optgroup>
					<optgroup class="Lycopodiophyta" label="Lycopodiophyta">
						<option value="/Selaginella_moellendorffii/Info/Index">Selaginella moellendorffii</option>
					</optgroup>
					<optgroup class="Bryophyta" label="Bryophyta">
						<option value="/Physcomitrella_patens/Info/Index">Physcomitrella patens</option>
					</optgroup>
					<optgroup class="Chlorophyta" label="Chlorophyta">
						<option value="/Chlamydomonas_reinhardtii/Info/Index">Chlamydomonas reinhardtii</option>
						<option value="/Ostreococcus_lucimarinus/Info/Index">Ostreococcus lucimarinus</option>
					</optgroup>
					<optgroup class="Rhodophyta" label="Rhodophyta">
						<option value="/Chondrus_crispus/Info/Index">Chondrus crispus</option>
						<option value="/Cyanidioschyzon_merolae/Info/Index">Cyanidioschyzon merolae</option>
						<option value="/Galdieria_sulphuraria/Info/Index">Galdieria sulphuraria</option>
					</optgroup>
					<optgroup class="Amborellales" label="Amborellales">
						<option value="/Amborella_trichopoda/Info/Index">Amborella trichopoda</option>
					</optgroup>
				</select>
				<br>
				<a href="#">View full list of all Ensembl Plants species</a>
			</div>



			</div>
			
		</div>
		
	</div>


		</dir>
		<div class="col-sm-6 col-md-6 column-two">
			<div class="column-padding no-right-margin">
				<div class="plain-box">
					<h2>New barley genome</h2>
			<p>A ten-nation consortium has reported the first high-quality reference genome sequence of Hordeum vulgare (barley). The barley genome was sequenced and assembled using an array of state-of- the-art methods, taking ten years. For the first time, scientists can now locate all genes precisely in the genome and analyze complex gene families that play a key role in malting and resilience.</p>

			<h2>New Arabidopsis variation data from the 1001 Genomes Project</h2>
			<p>We have upgraded our representation of genetic variation in Arabidopsis thaliana, incorporating the full data set from the 1001 Genomes Project, covering more than 10 million variant loci across 1,135 samples (Cell 2016).</p>

			<h2>New bread wheat variation data</h2>
			<p>A total of 80,829 variation markers from the iSelect 90k array and 13.8 million Inter-Homoeologous Variants (IHVs) have been added to the new genome assembly of Triticum aestivum cv. Chinese Spring produced by the Earlham Institute.</p>
			<p>This data is viewable alongside the existing Axiom 35k and 820k SNP marker sets provided by CerealsDB and located on the new assembly and the publicly available EMS mutant lines from tetraploid (cv. Kronos) and hexaploid (cv. Cadenza) TILLING populations (read more).</p>

			<h2>Ensembl Plants Archive Site</h2>
			<p>Alongside release 32 we have launched a new archive site, where we will keep selected previous releases of Ensembl Plants publicly available. The first release available on the archive site is release 31, and includes the previous assemblies for wheat and maize.</p>
				</div>
				

			</div>
			
			
		</div>
	</div>
</div>
</div>

	<div class="row">
		<div class="col-sm-6 col-md-6">
			
			<div class="plain-box what"><h2>What's New in Release 54</h2>
<div class="info-box embedded-box float-right"><h3>Did you know...?</h3><p><a href="http://trackhubregistry.org/"><img alt="Read more" src="http://ensemblgenomes.org/sites/ensemblgenomes.org/files/field/image/thr-02.png" style="float:right; height:40px; margin:1px 5px; width:40px" title="The Track Hub Registry"></a></p>

<p>You can search the <a href="http://trackhubregistry.org/" rel="external">Track Hub Registry</a> to find more than 900 public RNA-Seq studies aligned to plants (<a href="http://ensemblgenomes.org/info/access/public-track-hubs" rel="external">read more</a>) on the Ensembl Genomes site.</p></div>
<ul><li>Updated genomes</li>
        <ul><li>New assembly and annotation for <a href="/Hordeum_vulgare" title="Hordeum vulgare in Gramene"><em>Hordeum vulgare</em></a> (barley)</li></ul>
        
        <li>New data
        <ul><li>New automatic <a href="http://ensemblgenomes.org/info/data/rfam_alignment" title="Ensembl Documentation" rel="external">ncRNA feature alignments</a> across all plants</li>
                <li>New <a href="http://plantreactome.gramene.org/" title="Reactome for plants!" rel="external">plant reactome</a> cross-references across all plants</li>
                <li>New gene identifier mappings for <a href="/Sorghum_bicolor" title="Sorghum bicolor in Gramene"><em>Sorghum bicolor</em></a></li></ul>
        </li>
        <li>Updated data
        <ul><li>Updated variation data for <em><a href="/Arabidopsis_thaliana" title="Arabidopsis thaliana in Gramene">Arabidopsis thaliana</a></em>,<!--nbsp--> <!--nbsp-->incorporating the full data set from the <a href="http://1001genomes.org/" title="1001genomes.org" rel="external">1001 Genomes Project</a>.</li>
                <li>Updated <a href="http://ensemblgenomes.org/info/data/peptide_compara" title="Ensembl Documentation" rel="external">peptide comparative genomics</a> including updated barley</li>
                <li>Updated protein features using <a href="http://www.ebi.ac.uk/interpro/search/sequence-search" rel="external">InterProScan</a> with version 63 of <a href="https://www.ebi.ac.uk/interpro/" rel="external">InterPro</a> (new sources added: <a href="https://www.ncbi.nlm.nih.gov/cdd/" rel="external">CDD</a>, <a href="http://mobidb.bio.unipd.it/" rel="external">MobiDB</a>, <a href="http://sfld.rbvi.ucsf.edu/" rel="external">SFLD</a>)</li>
                <li>Updated gene and variation <a href="http://ensembl.gramene.org/biomart/martview">BioMarts</a></li></ul>
        </li>
	<li>Updated software
    	<ul><li>Updated genome browser, database schema, Mart and API to <a href="http://ensembl.org/info/website/news.html?id=89" rel="external">Ensembl 89 software</a></li></ul>
        </li></ul>
</div>

		</div>
		<div class="col-md-6 col-sm-6">
			<div class="plain-box"><h2 class="first"></h2> 
		 
				<div style="text-align:center; margin-bottom:1em; margin-top:1em">
				<a href="http://www.gramene.org"><img src="sites/all/themes/gramene/images/gramene_logo_2.png"></a><br>
				<a href="http://www.ebi.ac.uk"><img src="http://www.ebi.ac.uk/inc/images/ebilogohelp.gif" style="height:50px"></a>
				</div>

				<p> 
				This work is a joint project between <a href="http://www.ensemblgenomes.org" rel="external">EnsemblGenomes</a> at the <a href="http://www.ebi.ac.uk" rel="external">European Bioinformatics Institute</a> and
				the group of <a href="http://www.warelab.org" rel="external">Doreen Ware</a> at the
				<a href="http://www.cshl.org" rel="external">Cold Spring Harbor Laboratory</a>, who
				have developed the <a href="http://www.gramene.org" rel="external">Gramene</a>
				database, a resource for plant comparative genomics based on Ensembl
				technology.  A common set of databases are available through
				EnsemblGenomes and Gramene, and the two groups are collaborating on the
				integration of content, quality control and the development of new
				features.
				</p>
		</div>

			<div class="plain-box">
	    <h2 class="first">Organelle Annotation</h2>
	    <p>For annotations relating to Organelles, see the <a href="/organelles">
	  organelles page </a></p>
	</div>
		</div>
	</div>
	<div class="column-wrapper">
  <div class="column-two left">
		  <p>
      Gramene release 54 - July 2017
		  © <span class="print_hide"><a href="http://www.ebi.ac.uk/" style="white-space:nowrap">EMBL-EBI</a></span>
      <span class="screen_hide_inline">EMBL-EBI</span>
      </p>
  </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-1624628-5', 'gramene.org');
      ga('send', 'pageview');

    </script>
    <div class="twocol-right right unpadded">
      <a href="http://www.gramene.org/about-gramene">About&nbsp;Gramene</a> | 
      <a href="http://www.ensemblgenomes.org">About&nbsp;EnsemblGenomes</a> | 
      <a href="http://tools.gramene.org/feedback">Contact&nbsp;Us</a> | 
      <a href="/info/website/index.html">Help</a>
    </div>
            <p class="invisible">.</p>
          </div>


<div id="bg-footer-up">
<div class="container">
<div class="row">
		<ul class="nav submenu navbar-nav">
				<li><a href="">Release Notes (54)</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Cite</a></li>
				<li><a href="">Feedback</a></li>
		 </ul>
				<ul class="nav navbar-nav navbar-right social">
					<li>
					<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FGramene&amp;layout=button_count&amp;show_faces=false&amp;width=80&amp;font=arial&amp;height=20&amp;action=like&amp;colorscheme=light&amp;locale=en_US&amp;send=false&amp;share=false" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:80px;height:20px;" allowtransparency="true" data-reactid="183">						
					</iframe></li>
					<li>
					<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-follow-button twitter-follow-button-rendered" title="Twitter Follow Button" src="http://platform.twitter.com/widgets/follow_button.f8c8d971a6ac545cf416e3c1ad4bbc65.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=GrameneDatabase&amp;show_count=true&amp;show_screen_name=true&amp;size=m&amp;time=1504790828745" style="position: static; visibility: visible; width: 252px; height: 20px;" data-screen-name="GrameneDatabase"></iframe>
					</li>
				</ul>
 </div>
 </div>
 </div>

 <div class="footer-down">
    <div class="container">
        <div class="row footer-last">
            <div class="col-sm-8 col-xs-12">
                <p>Gramene is a collaborative effort among
                    <a href="http://www.cshl.edu" class="foot">Cold Spring Harbor Laboratory</a>,
                    <a href="http://www.cgrb.oregonstate.edu" class="foot">Oregon State University</a>, and
                    <a href="http://www.ebi.ac.uk" class="foot">EMBL-EBI</a>.
                </p>

                <p>
                    Funding is provided by the
                    <a href="http://www.nsf.gov/awardsearch/showAward?AWD_ID=1127112" class="foot">NSF</a> and
                    <a href="http://www.ars.usda.gov" class="foot">USDA ARS</a>.
                </p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="tech-info well">
                    <h5>Application Info</h5>
                    <ul class="buildInfo">
                        <li>Data Release 54</li>
                        <li>Gramene Search UI
                            
                            <a title="Release available on github" href="https://github.com/warelab/gramoogle/releases/tag/v3.0.2" class="foot">Release v3.0.2</a>
                            
                            <a title="Built by Travis-CI" href="https://travis-ci.org/warelab/gramoogle/jobs/254570511" class="foot">Build #679.1</a>
                            
                        </li>
                        <li>Built on July 17th 2017 at 7:10:32 pm</li>
                    </ul>
                    <h5>Actions</h5>
                    <button class="btn btn-xs btn-danger" onclick="clearLocalStorage()">
                        Reset Gramene Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>