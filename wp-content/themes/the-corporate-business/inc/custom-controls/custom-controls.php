<?php
/**
 * Customizer Custom Controls
 */

if ( class_exists( 'WP_Customize_Control' ) ) {

	/**
	 * Toggle Switch Custom Control
	 */
	class the_corporate_business_Toggle_Switch_Custom_Control extends WP_Customize_Control {
		/**
		 * The type of control being rendered
		 */
		public $type = 'toggle_switch';

		/**
		 * Render the control in the customizer
		 */
		public function render_content() {
			?>
			<div class="toggle-switch-control">
				<div class="toggle-switch">

					<input type="checkbox" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" class="toggle-switch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" 
														<?php
															$this->link();
															checked( $this->value() );
														?>
					>
					<label class="toggle-switch-label" for="<?php echo esc_attr( $this->id ); ?>">
						<span class="toggle-switch-inner"></span>
						<span class="toggle-switch-switch"></span>
					</label>
					
				</div>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if ( ! empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
			</div>
			<?php
		}
	}

	/**
	 * Horizontal Line Control
	 */
	class the_corporate_business_Customize_Horizontal_Line extends WP_Customize_Control {
		/**
		 * Control Type
		 */
		public $type = 'hr';

		/**
		 * Render Settings
		 */
		public function render_content() {
			?>
			<div>
				<hr style="border: 1px dotted #72777c;" />
			</div>
			<?php
		}
	}

}

if ( class_exists( 'WP_Customize_Section' ) ) {
	/**
	 * Upsell section
	 */
	class the_corporate_business_Upsell_Section extends WP_Customize_Section {
		/**
		 * The type of control being rendered
		 */
		public $type = 'the_corporate_business-upsell';

		/**
		 * The Upsell button text
		 */
		public $button_text = '';

		/**
		 * The Upsell URL
		 */
		public $url = '';

		/**
		 * The background color for the control
		 */
		public $background_color = '';

		/**
		 * The text color for the control
		 */
		public $text_color = '';

		/**
		 * Render the section, and the controls that have been added to it.
		 */
		protected function render() {
			$background_color = ! empty( $this->background_color ) ? esc_attr( $this->background_color ) : '#fff';
			$text_color       = ! empty( $this->text_color ) ? esc_attr( $this->text_color ) : '#50575e';
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="the_corporate_business_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title" style="color:<?php echo esc_attr( $text_color ); ?>;background:<?php echo esc_attr( $background_color ); ?>;border-left-color:<?php echo esc_attr( $background_color ); ?>;">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

if ( class_exists( 'WP_Customize_Control' ) ) {
	class Separator_Custom_control extends WP_Customize_Control{
	        public $type = 'separator';
	        public function render_content(){
	                ?>
	                <p><hr></p>
	                <?php
	        }
	}    

}

if ( class_exists( 'WP_Customize_Control' ) ) {
	class Custom_Text_Control extends WP_Customize_Control {
        public $type = 'customtext';
        public $extra = ''; // we add this for the extra description
        public function render_content() {
        ?>
        <label>            
            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <span style="padding-bottom: 10px;"><?php echo esc_html( $this->extra ); ?></span>
            <input type="text" style="margin-top:5px;" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?> />
        </label>
        <?php
        }
    }
}
