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
</div>
<div class="main-grid">
<div class="container">
	<div class="row"> -->
		<!-- <div class="col-md-9 col-sm-9 feids">
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
		</div> -->

		<!-- <div class="col-md-3 col-sm-3 news">
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

<?php print render($page['content']); ?>

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