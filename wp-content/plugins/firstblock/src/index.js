import { registerBlockType } from '@wordpress/blocks';

registerBlockType( 'ml-custom-block/firstblock', {
	edit: function () {
		return <p>Edit</p>;
	},
	save: function () {
		return <p>Save</p>;
	},
} );
