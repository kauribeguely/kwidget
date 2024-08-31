
<?php

// namespace Elementor;

class Two_Phones extends \Elementor\Widget_Base {

	public function get_script_depends() {
		return [ 'three-export-script'];
	}

	public function get_style_depends() {
		return [ 'three-export-style'];
	}

	public function get_name() {
		return 'twophones';
	}

	public function get_title() {
		return esc_html__( 'Two Phones', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-device-mobile';
	}

	public function get_categories() {
		return [ 'layout' ];
	}

	public function get_keywords() {
		return [ 'two', 'phones' ];
	}

	protected function register_controls() {

		$this->start_controls_section(
		    'image_section',
		    [
		        'label' => __( 'Images', 'text-domain' ),
		        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		    ]
		);

		// Path to your custom placeholder image
		$default_phone_image = plugins_url( 'img/ar.PNG', __FILE__ );

		// First image selector control
		$this->add_control(
		    'image_1',
		    [
		        'label' => __( 'Image 1', 'text-domain' ),
		        'type' => \Elementor\Controls_Manager::MEDIA,
		        'default' => [
		            'url' => $default_phone_image,
		        ],
		        'dynamic' => [
		            'active' => true,
		        ],
		        'render_type' => 'template',
		    ]
		);

		// Second image selector control
		$this->add_control(
		    'image_2',
		    [
		        'label' => __( 'Image 2', 'text-domain' ),
		        'type' => \Elementor\Controls_Manager::MEDIA,
		        'default' => [
		            'url' => $default_phone_image,
		        ],
		        'dynamic' => [
		            'active' => true,
		        ],
		        'render_type' => 'template',
		    ]
		);

		$this->add_control(
						'section_height',
						[
								'label' => __( 'Section Height', 'text-domain' ),
								'type' => \Elementor\Controls_Manager::NUMBER,
								'default' => 300,
								'min' => 100,
								'max' => 1000,
								'step' => 1,
								'description' => __( 'Set the height for sections.', 'text-domain' ),
						]
				);


		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
			<div style="height: <?php echo $settings['section_height'] . 'px;' ?>;>

<div class="section bigScreenSect" style="">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">          <div class="center"></div>        <div class="templateDiv" id="" style="opacity: 1; transform: translate3d(-98px, -175px, -240px) rotateX(5deg) rotateY(20deg) rotateZ(15deg); scale: 1.1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">      			<img class="image3" draggable="false" src="<?php echo $settings['image_1']['url']?>" style="opacity: 1; transform: translate3d(0px, 0px, -240px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 354px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><div class="templateDiv" id="" style="opacity: 1; transform: translate3d(104px, 61px, 0px) rotateX(-15deg) rotateY(-20deg) rotateZ(-20deg); scale: 0.9; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">      			<img class="image3" draggable="false" src="<?php echo $settings['image_2']['url']?>" style="opacity: 1; transform: translate3d(11px, -1px, -160px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 414px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div></div>      </div>    </div><div class="section mobSect" style="">      <div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">          <div class="center">          </div>        <div class="templateDiv selected" id="" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); scale: 1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene" style="">      			</div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><img class="image3 selected" draggable="false" src="<?php echo $settings['image_1']['url']?>" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 204px;"><div class="templateDiv selected" id="" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); scale: 1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene" style="">      			</div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><img class="image3 selected" draggable="false" src="<?php echo $settings['image_2']['url']?>" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 204px;"></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>
		</div>

		<?php
	}

	protected function content_template() {
		?>
		<#
		if ( '' === settings.title ) {
			return;
		}
		#>

<div style="height:{{ settings.section_height }}px;">

	<div class="section bigScreenSect" style="">      <div class="overflow">        <div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">          <div class="center"></div>        <div class="templateDiv" id="" style="opacity: 1; transform: translate3d(-98px, -175px, -240px) rotateX(5deg) rotateY(20deg) rotateZ(15deg); scale: 1.1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">      			<img class="image3" draggable="false" src="{{settings.image_1.url}}" style="opacity: 1; transform: translate3d(0px, 0px, -240px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 354px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><div class="templateDiv" id="" style="opacity: 1; transform: translate3d(104px, 61px, 0px) rotateX(-15deg) rotateY(-20deg) rotateZ(-20deg); scale: 0.9; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">      			<img class="image3" draggable="false" src="{{settings.image_2.url}}" style="opacity: 1; transform: translate3d(11px, -1px, -160px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 414px; border-radius: 0px; box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-width: 0px; border-color: rgb(0, 0, 0);"></div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div></div>      </div>    </div><div class="section mobSect" style="">      <div class="overflow mobScene">        <div class="scene scanim" style="transform: rotateX(0.4deg) rotateY(1.58deg) rotateZ(1.58deg);">          <div class="center">          </div>        <div class="templateDiv selected" id="" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); scale: 1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene" style="">      			</div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><img class="image3 selected" draggable="false" src="{{settings.image_1.url}}" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 204px;"><div class="templateDiv selected" id="" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); scale: 1; border-width: 0px; border-color: rgb(0, 0, 0); box-shadow: rgb(0, 0, 0) 0px 0px 0px; border-radius: 0px;">      <div class="templateCenter deviceBordered deviceColor " style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-style: solid; border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 29px; width: 230px; height: 498px; background-color: rgb(255, 255, 255);">      		<div class="deviceBordered overflow" style="opacity: 1; transform: translate3d(0px, 4px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 17px; width: 215px; height: 430px; border-style: solid; background-color: transparent;">      			<div class="scene" style="">      			</div>      		</div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(0px, 235px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 18px; height: 3px; width: 66px; border-style: solid;"></div>      		<div class="deviceBordered" style="position: absolute; opacity: 1; transform: translate3d(82px, -230px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); border-width: 3px; border-color: rgb(0, 0, 0); border-radius: 35px; width: 6px; height: 6px; border-style: solid;"></div>      </div>    </div><img class="image3 selected" draggable="false" src="{{settings.image_2.url}}" style="opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg); width: 204px;"></div>      </div>    </div><script>var xAnimMax = 5; var yAnimMax = 5; var zAnimMax = 5; var srcLoadListString = ""; imageTotal=0; var srcLoadList = srcLoadListString.split(",");</script>

	</div>
		<?php
	}

}
