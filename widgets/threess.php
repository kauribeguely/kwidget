<?php
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
		return [ 'kauri' ];
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
				'default' => esc_html__( 'Hello world', 'elementor-addon' ),
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
		<div class="section bigScreenSect" style="height:400px">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(1.81562deg) rotateY(1.96554deg) rotateZ(1.96554deg);">          <div class="center"></div>        <img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-3.png" style="opacity: 1; transform: translate3d(-124px, -202px, -320px) rotateX(0deg) rotateY(0deg) rotateZ(-5deg); width: 324px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-2.png" style="opacity: 1; transform: translate3d(-63px, 111px, 160px) rotateX(0deg) rotateY(0deg) rotateZ(-10deg); width: 204px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-1.png" style="opacity: 1; transform: translate3d(48px, 2px, -160px) rotateX(0deg) rotateY(0deg) rotateZ(5deg); width: 294px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      </div>    </div><div class="section mobSect" style="height:69vh">      <div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(1.81562deg) rotateY(1.96554deg) rotateZ(1.96554deg);">          <div class="center">          </div>        <img class="image3 selected" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-3.png" style="opacity: 1; transform: translate3d(-82px, -247px, -320px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 384px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-2.png" style="opacity: 1; transform: translate3d(-19px, 103px, 160px) rotateX(0deg) rotateY(0deg) rotateZ(20deg); width: 144px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-1.png" style="opacity: 1; transform: translate3d(37px, 3px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(-25deg); width: 234px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>

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
		<div class="section bigScreenSect" style="height:400px">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(1.81562deg) rotateY(1.96554deg) rotateZ(1.96554deg);">          <div class="center"></div>        <img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-3.png" style="opacity: 1; transform: translate3d(-124px, -202px, -320px) rotateX(0deg) rotateY(0deg) rotateZ(-5deg); width: 324px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-2.png" style="opacity: 1; transform: translate3d(-63px, 111px, 160px) rotateX(0deg) rotateY(0deg) rotateZ(-10deg); width: 204px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-1.png" style="opacity: 1; transform: translate3d(48px, 2px, -160px) rotateX(0deg) rotateY(0deg) rotateZ(5deg); width: 294px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      </div>    </div><div class="section mobSect" style="height:69vh">      <div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(1.81562deg) rotateY(1.96554deg) rotateZ(1.96554deg);">          <div class="center">          </div>        <img class="image3 selected" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-3.png" style="opacity: 1; transform: translate3d(-82px, -247px, -320px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 384px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-2.png" style="opacity: 1; transform: translate3d(-19px, 103px, 160px) rotateX(0deg) rotateY(0deg) rotateZ(20deg); width: 144px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"><img class="image3" draggable="false" src="https://kaurib.com/wp/ncoa/wp-content/uploads/sites/4/2024/08/block-1.png" style="opacity: 1; transform: translate3d(37px, 3px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(-25deg); width: 234px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>

		<p class="hello-world">
			{{ settings.title }}
		</p>
		<?php
	}
}
