
<?php

// namespace Elementor;

class Threess_Widget extends \Elementor\Widget_Base {

	public function get_script_depends() {
		return [ 'three-export-script'];
	}

	public function get_style_depends() {
		return [ 'three-export-style'];
	}

	public function get_name() {
		return 'threess';
	}

	public function get_title() {
		return esc_html__( 'Three S S', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'aka-codes' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function register_controls() {

		// Content Tab Start

		$this->start_controls_section(
			'section_title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Stay Focused', 'elementor-addon' ),
			]
		);

		// Add Typography control
		$this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
				[
						'name' => 'title_typography', // Unique name for the typography control
						'label' => __( 'Typography', 'text-domain' ),
						'selector' => '{{WRAPPER}} .integral', // The CSS selector of the text element to apply typography
				]
		);

		$this->end_controls_section();

		// Content Tab End


		// Style Tab Start

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => esc_html__( 'Title', 'elementor-addon' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Text Color', 'elementor-addon' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .hello-world' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// Style Tab End

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( empty( $settings['title'] ) ) {
			return;
		}
		?>
			<div class="section bigScreenSect" style="">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(1.99946deg) rotateY(2.07031deg) rotateZ(2.07031deg);">          <div class="center"></div>        <div class="textContainer" style="opacity: 1; transform: translate3d(-160px, -235px, 0px) rotateX(0deg) rotateY(20deg) rotateZ(-10deg); width: 448.8px; height: 167px;">
				<h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);"><?php echo $settings['title']; ?></h1>
			</div>
			<div class="textContainer" style="opacity: 1; transform: translate3d(143px, -13px, -160px) rotateX(0deg) rotateY(-15deg) rotateZ(15deg); width: 448.8px; height: 167px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">
				<?php echo $settings['title']; ?>
			</h1>
		</div>
		<div class="textContainer" style="opacity: 1; transform: translate3d(-103px, 247px, -480px) rotateX(0deg) rotateY(15deg) rotateZ(-15deg); width: 448.8px; height: 167px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);"><?php echo $settings['title']; ?></h1></div></div>      </div>    </div><div class="section mobSect" style="">
			<div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(1.99946deg) rotateY(2.07031deg) rotateZ(2.07031deg);">          <div class="center">          </div>        <div class="textContainer selected" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 76.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);"><?php echo $settings['title']; ?></h1></div><div class="textContainer selected" style="opacity: 1; transform: translate3d(-241px, -244px, -160px) rotateX(0deg) rotateY(20deg) rotateZ(-10deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);"><?php echo $settings['title']; ?></h1></div><div class="textContainer selected" style="opacity: 1; transform: translate3d(175px, 13px, -160px) rotateX(0deg) rotateY(-15deg) rotateZ(30deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);"><?php echo $settings['title']; ?></h1></div></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>
		<p class="hello-world">
			<?php echo $settings['title']; ?>
		</p>
		<?php
	}

	protected function content_template() {
		?>
		<#
		if ( '' === settings.title ) {
			return;
		}
		#>
			<div class="section bigScreenSect" style="">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(1.99946deg) rotateY(2.07031deg) rotateZ(2.07031deg);">          <div class="center"></div>        <div class="textContainer" style="opacity: 1; transform: translate3d(-160px, -235px, 0px) rotateX(0deg) rotateY(20deg) rotateZ(-10deg); width: 448.8px; height: 167px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div><div class="textContainer" style="opacity: 1; transform: translate3d(143px, -13px, -160px) rotateX(0deg) rotateY(-15deg) rotateZ(15deg); width: 448.8px; height: 167px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div><div class="textContainer" style="opacity: 1; transform: translate3d(-103px, 247px, -480px) rotateX(0deg) rotateY(15deg) rotateZ(-15deg); width: 448.8px; height: 167px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div></div>      </div>    </div><div class="section mobSect" style="">      <div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(1.99946deg) rotateY(2.07031deg) rotateZ(2.07031deg);">          <div class="center">          </div>        <div class="textContainer selected" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 76.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div><div class="textContainer selected" style="opacity: 1; transform: translate3d(-241px, -244px, -160px) rotateX(0deg) rotateY(20deg) rotateZ(-10deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div><div class="textContainer selected" style="opacity: 1; transform: translate3d(175px, 13px, -160px) rotateX(0deg) rotateY(-15deg) rotateZ(30deg); width: 0px; height: 0px;"><h1 class="integral" style="font-weight: normal; font-style: normal; text-transform: none; white-space: normal; color: rgb(0, 0, 0); font-size: 166.6px; letter-spacing: 0em; line-height: 1em; -webkit-text-stroke: 0em rgb(0, 0, 0);">{{ settings.title }}</h1></div></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>
				<p class="hello-world">
			{{ settings.title }}
		</p>
		<?php
	}

}
