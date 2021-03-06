<?php

namespace Lychee\Locale;

final class French
{
    static public function code()
    {
        return 'fr';
    }

    static public function get_locale()
    {
        $locale	= array(
            'USERNAME'		=> 'Nom d\'utilisateur',
            'PASSWORD'		=> 'Mot de passe',
            'ENTER'			=> 'Entrer',
            'CANCEL'		=> 'Annuler',
            'SIGN_IN'		=> 'Connexion',
            'CLOSE'			=> 'Fermer',

            'CHANGE_LOGIN'		=> 'Changer le nom d\'utilisateur',
            'CHANGE_SORTING'	=> 'Changer le tri',
            'SET_DROPBOX'		=> 'Parametrer Dropbox',
            'ABOUT_LYCHEE'		=> 'A propos de Lychee',
            'DIAGNOSTICS'		=> 'Diagnostics',
            'LOGS'				=> 'Montre les logs',
            'SIGN_OUT'			=> 'Deconnexion',
            'UPDATE_AVAILABLE'	=> 'Update available!',

            'SMART_ALBUMS'		=> 'Smart albums',
            'ALBUMS'			=> 'Albums',

            'RENAME'			=> 'Renommer',
            'RENAME_ALL'		=> 'Tout renommer',
            'MERGE'				=> 'Fusioner',
            'MERGE_ALL'			=> 'Tout fusioner',
            'MAKE_PUBLIC' 		=> 'Rendre publique',
            'SHARE_ALBUM' 		=> 'Partager l\'album',
            'SHARE_PHOTO' 		=> 'Partager la photo',
            'DOWNLOAD_ALBUM'	=> 'Telecharger l\'album',
            'ABOUT_ALBUM'		=> 'A propros de l\'album',
            'DELETE_ALBUM'		=> 'Supprimer l\'album',

            'DELETE_ALBUM_QUESTION' 		=> 'Supprimer l\'album et ses photos',
            'KEEP_ALBUM'					=> 'Garder l\'album',
            'DELETE_ALBUM_CONFIRMATION_1' 	=> 'Etes vous sur de vouloir supprimer l\'album',
            'DELETE_ALBUM_CONFIRMATION_2'	=> 'et toutes les photos qu\'il contient? Cette action est definitive!',

            'DELETE_ALBUMS_QUESTION' 		=> 'Suprimer les albums et leurs Photos',
            'KEEP_ALBUMS'					=> 'Garder les albums',
            'DELETE_ALBUMS_CONFIRMATION_1'	=> 'Etes vous sur de voir supprimer les ',
            'DELETE_ALBUMS_CONFIRMATION_2'	=> 'albums selectionnes et toutes leurs photos? Cette action est definitive!',

            'DELETE_UNSORTED_CONFIRM' 		=> 'Etes vous sur de vouloir supprimer toutes les photos de \'Non-tries\'?<br>Cette action est definitive!',
            'CLEAR_UNSORTED'				=> 'Vider Non-tries',
            'KEEP_UNSORTED'					=> 'Garder Non-tries',

            'EDIT_SHARING'					=> 'Editer le partage',
            'MAKE_PRIVATE'					=> 'Rendre prive',

            'CLOSE_ALBUM'					=> 'Fermer l\'album',
            'CLOSE_PHOTO'					=> 'Fermer la photo',

            'ADD'							=> 'Ajouter',
            'MOVE'							=> 'Deplacer',
            'MOVE_ALL'						=> 'Tout deplacer',
            'DUPLICATE'						=> 'Dupliquer',
            'DUPLICATE_ALL'					=> 'Tout dupliquer',
            'DELETE'						=> 'Supprimer',
            'DELETE_ALL'					=> 'Tout supprimer',
            'DOWNLOAD'						=> 'Telecharger',
            'UPLOAD_PHOTO'					=> 'Heberger une photo',
            'IMPORT_LINK'					=> 'Importer par lien',
            'IMPORT_DROPBOX'				=> 'Importer depuis Dropbox',
            'IMPORT_SERVER'					=> 'Importer depuis le Server',
            'NEW_ALBUM'						=> 'Nouvel Album',

            'TITLE_NEW_ALBUM'			=> 'Entrer le titre du nouvel album:',
            'UNTITLED'					=> 'Sans-titre',
            'UNSORTED'					=> 'Non-tries',
            'STARED'					=> 'Etoiles',
            'RECENT'					=> 'Recent',
            'PUBLIC'					=> 'Publique',
            'NUM_PHOTOS'				=> 'Photos',

            'CREATE_ALBUM'				=> 'Creer un album',

            'STAR_PHOTO'				=> 'Etoiler la photo',
            'STAR'						=> 'Etoiler',
            'STAR_ALL'					=> 'Tout etoiler',
            'TAGS'						=> 'Tagger',
            'TAGS_ALL'					=> 'Tout Tagger',
            'UNSTAR_PHOTO'				=> 'Des-etoiler la photo',

            'FULL_PHOTO'				=> 'Tailler reele',
            'ABOUT_PHOTO'				=> 'A propos de la photo',
            'DIRECT_LINK'				=> 'Lien direct',

            'ALBUM_ABOUT'				=> 'A propos',
            'ALBUM_BASICS'				=> 'Basique',
            'ALBUM_TITLE'				=> 'Titre',
            'ALBUM_NEW_TITLE'			=> 'Entrer un nouveau titre pour cet album:',
            'ALBUMS_NEW_TITLE_1'		=> 'Entrer un titre pour les',
            'ALBUMS_NEW_TITLE_2'		=> 'albums selectionnes:',
            'ALBUM_SET_TITLE'			=> 'Choisr un title',
            'ALBUM_DESCRIPTION'			=> 'Description',
            'ALBUM_NEW_DESCRIPTION'		=> 'Entre une nouvelle description pour cet album:',
            'ALBUM_SET_DESCRIPTION'		=> 'Choisir une description',
            'ALBUM_ALBUM'				=> 'Album',
            'ALBUM_CREATED'				=> 'Cree',
            'ALBUM_IMAGES'				=> 'Images',
            'ALBUM_SHARING'				=> 'Partage',
            'ALBUM_SHR_YES'				=> 'Oui',
            'ALBUM_SHR_NO'				=> 'Non',
            'ALBUM_PUBLIC'				=> 'Publique',
            'ALBUM_HIDDEN'				=> 'Cache',
            'ALBUM_HIDDEN_EXPL'			=> 'Seul les personnes avec le lien peuvent voir cet album.',
            'ALBUM_DOWNLOADABLE'		=> 'Telechargeable',
            'ALBUM_DOWNLOADABLE_EXPL'	=> 'Les visiteurs peuvent telecharger cet album.',
            'ALBUM_PASSWORD'			=> 'Mot de passe',
            'ALBUM_PASSWORD_PROT'		=> 'Protege par un mot de passe.',
            'ALBUM_PASSWORD_PROT_EXPL'	=> 'Cet album est accessible avec un mot de passe.',
            'ALBUM_PASSWORD_REQUIRED' 	=> 'Cet album est protege par un mot de passe. Entrer le mot de passe pour voir les photos de cet album:',
            'ALBUM_MERGE_1'				=> 'Etes vous sur de vouloir fusioner l\'album',
            'ALBUM_MERGE_2'				=> 'dans l\'album',
            'ALBUMS_MERGE'				=> 'Etes vous sur de vouloir fusioner les albums selectiones dans l\'album',
            'MERGE_ALBUM'				=> 'Fusioner les albums',
            'DONT_MERGE'				=> 'Ne pas fusioner.',

            'PHOTO_ABOUT'				=> 'A propos',
            'PHOTO_BASICS'				=> 'Basiques',
            'PHOTO_TITLE'				=> 'Titre',
            'PHOTO_NEW_TITLE'			=> 'Entrer un nouveau titre pour cette photo:',
            'PHOTO_SET_TITLE'			=> 'Choisr un title',
            'PHOTO_UPLOADED'			=> 'Importer',
            'PHOTO_DESCRIPTION'			=> 'Description',
            'PHOTO_NEW_DESCRIPTION'		=> 'Entrer une nouvelle description pour cette photo:',
            'PHOTO_SET_DESCRIPTION'		=> 'Choisir une description',
            'PHOTO_IMAGE'				=> 'Image',
            'PHOTO_SIZE'				=> 'Taille',
            'PHOTO_FORMAT'				=> 'Format',
            'PHOTO_RESOLUTION'			=> 'Resolution',
            'PHOTO_TAGS'				=> 'Tags',
            'PHOTO_NOTAGS'				=> 'Pas de tags',
            'PHOTO_NEW_TAGS'			=> 'Enter your tags for this photo. You can add multiple tags by separating them with a comma:',
            'PHOTO_NEW_TAGS_1'			=> 'Enter your tags for all',
            'PHOTO_NEW_TAGS_2'			=> 'selected photos. Existing tags will be overwritten. You can add multiple tags by separating them with a comma:',
            'PHOTO_SET_TAGS'			=> 'Set Tags',
            'PHOTO_CAMERA'				=> 'Camera',
            'PHOTO_CAPTURED'			=> 'Captured',
            'PHOTO_MAKE'				=> 'Make',
            'PHOTO_TYPE'				=> 'Type/Model',
            'PHOTO_SHUTTER'				=> 'Shutter Speed',
            'PHOTO_APERTURE'			=> 'Aperture',
            'PHOTO_FOCAL'				=> 'Focal Length',
            'PHOTO_ISO'					=> 'ISO',
            'PHOTO_SHARING'				=> 'Sharing',
            'PHOTO_SHR_PLUBLIC'			=> 'Public',
            'PHOTO_SHR_ALB'				=> 'Yes (Album)',
            'PHOTO_SHR_PHT'				=> 'Yes (Photo)',
            'PHOTO_SHR_NO'				=> 'No',
            'PHOTO_DELETE'				=> 'Delete Photo',
            'PHOTO_KEEP'				=> 'Keep Photo',
            'PHOTO_DELETE_1'			=> 'Are you sure you want to delete the photo',
            'PHOTO_DELETE_2'			=> '? Cette action est definitive!',
            'PHOTO_DELETE_ALL_1'		=> 'Are you sure you want to delete all',
            'PHOTO_DELETE_ALL_2'		=> 'selected photo? Cette action est definitive!',
            'PHOTO_NEW_TITLE' 			=> 'Enter a new title for this photo:',
            'PHOTOS_NEW_TITLE_1' 		=> 'Enter a title for all',
            'PHOTOS_NEW_TITLE_2' 		=> 'selected photos:',
            'PHOTO_MAKE_PRIVATE_ALBUM'	=> 'This photo is located in a public album. To make this photo private or public, edit the visibility of the associated album.',
            'PHOTO_SHOW_ALBUM'			=> 'Show Album',

            'LOADING'					=> 'Loading',
            'ERROR'						=> 'Error',
            'ERROR_TEXT'				=> 'Whoops, it looks like something went wrong. Please reload the site and try again!',
            'ERROR_DB_1'				=> 'Unable to connect to host database because access was denied. Double-check your host, username and password and ensure that access from your current location is permitted.',
            'ERROR_DB_2'				=> 'Unable to create the database. Double-check your host, username and password and ensure that the specified user has the rights to modify and add content to the database.',
            'ERROR_CONFIG_FILE'			=> "Unable to save this configuration. Permission denied in <b>'data/'</b>. Please set the read, write and execute rights for others in <b>'data/'</b> and <b>'uploads/'</b>. Take a look at the readme for more information.",
            'ERROR_UNKNOWN'				=> 'Something unexpected happened. Please try again and check your installation and server. Take a look at the readme for more information.',
            'ERROR_LOGIN'				=> 'Unable to save login. Please try again with another username and password!',
            'RETRY'						=> 'Retry',

            'DB_INFO_TITLE'				=> 'Enter your database connection details below:',
            'DB_INFO_HOST'				=> 'Database Host (optional)',
            'DB_INFO_USER'				=> 'Database Username',
            'DB_INFO_PASSWORD'			=> 'Database Password',
            'DB_INFO_TEXT'				=> 'Lychee will create its own database. If required, you can enter the name of an existing database instead:',
            'DB_NAME'					=> 'Database Name (optional)',
            'DB_PREFIX'					=> 'Table prefix (optional)',
            'DB_CONNECT'				=> 'Connect',

            'LOGIN_TITLE'				=> 'Enter a username and password for your installation:',
            'LOGIN_USERNAME' 			=> 'New Username',
            'LOGIN_PASSWORD' 			=> 'New Password',
            'LOGIN_CREATE'				=> 'Create Login',

            'PASSWORD_TITLE'			=> 'Enter your current password:',
            'PASSWORD_CURRENT'			=> 'Current Password',
            'PASSWORD_TEXT'				=> 'Your username and password will be changed to the following:',
            'PASSWORD_CHANGE'			=> 'Change Login',


            'EDIT_SHARING_TITLE'		=> 'Edit Sharing',
            'EDIT_SHARING_TEXT'			=> 'The sharing-properties of this album will be changed to the following:',
            'SHARE_ALBUM_TEXT'			=> 'This album will be shared with the following properties:',

            'SORT_ALBUM_BY_1'			=> 'Sort albums by',
            'SORT_ALBUM_BY_2'			=> 'in an',
            'SORT_ALBUM_BY_3'			=> 'order.',

            'SORT_ALBUM_SELECT_1'		=> 'Creation Time',
            'SORT_ALBUM_SELECT_2'		=> 'Title',
            'SORT_ALBUM_SELECT_3'		=> 'Description',
            'SORT_ALBUM_SELECT_4'		=> 'Public',
            'SORT_ALBUM_SELECT_5'		=> 'Latest Take Date',
            'SORT_ALBUM_SELECT_5'		=> 'Oldest Take Date',


            'SORT_PHOTO_BY_1'			=> 'Sort photos by',
            'SORT_PHOTO_BY_2'			=> 'in an',
            'SORT_PHOTO_BY_3'			=> 'order.',

            'SORT_PHOTO_SELECT_1'		=> 'Upload Time',
            'SORT_PHOTO_SELECT_2'		=> 'Take Date',
            'SORT_PHOTO_SELECT_3'		=> 'Title',
            'SORT_PHOTO_SELECT_4'		=> 'Description',
            'SORT_PHOTO_SELECT_5'		=> 'Public',
            'SORT_PHOTO_SELECT_6'		=> 'Star',
            'SORT_PHOTO_SELECT_7'		=> 'Photo Format',

            'SORT_ASCENDING'			=> 'Ascending',
            'SORT_DESCENDING'			=> 'Descending',
            'SORT_CHANGE'				=> 'Change Sorting',

            'DROPBOX_TITLE'				=> 'Set Dropbox Key',
            'DROPBOX_TEXT'				=> "In order to import photos from your Dropbox, you need a valid drop-ins app key from <a href='https://www.dropbox.com/developers/apps/create'>their website</a>. Generate yourself a personal key and enter it below:",

            'VIEW_NO_RESULT'			=> 'No results',
            'VIEW_NO_PUBLIC_ALBUMS'		=> 'No public albums',
            'VIEW_NO_CONFIGURATION'		=> 'No configuration',
            'VIEW_PHOTO_NOT_FOUND'		=> 'Photo not found',

            'NO_TAGS'					=> 'No Tags',

            'UPLOAD_MANAGE_NEW_PHOTOS'	=> 'You can now manage your new photo(s).',
            'UPLOAD_COMPLETE'			=> 'Upload complete',
            'UPLOAD_COMPLETE_FAILED'	=> 'Failed to upload one or more photos.',
            'UPLOAD_IMPORTING'			=> 'Importing',
            'UPLOAD_IMPORTING_URL'		=> 'Importing URL',
            'UPLOAD_UPLOADING'			=> 'Uploading',
            'UPLOAD_FINISHED'			=> 'Finished',
            'UPLOAD_PROCESSING'			=> 'Processing',
            'UPLOAD_FAILED'				=> 'Failed',
            'UPLOAD_FAILED_ERROR'		=> 'Upload failed. Server returned an error!',
            'UPLOAD_FAILED_WARNING'		=> 'Upload failed. Server returned a warning!',
            'UPLOAD_SKIPPED'			=> 'Skipped',
            'UPLOAD_ERROR_CONSOLE'		=> 'Please take a look at the console of your browser for further details.',
            'UPLOAD_UNKNOWN'			=> 'Server returned an unknown response. Please take a look at the console of your browser for further details.',
            'UPLOAD_ERROR_UNKNOWN'		=> 'Upload failed. Server returned an unkown error!',
            'UPLOAD_IN_PROGRESS'		=> 'Lychee is currently uploading!',
            'UPLOAD_IMPORT_WARN_ERR'	=> 'The import has been finished, but returned warnings or errors. Please take a look at the log (Settings -> Show Log) for further details.',
            'UPLOAD_IMPORT_COMPLETE'	=> 'Import complete',
            'UPLOAD_IMPORT_INSTR'		=> 'Please enter the direct link to a photo to import it:',
            'UPLOAD_IMPORT'				=> 'Import',
            'UPLOAD_IMPORT_SERVER'		=> 'Importing from server',
            'UPLOAD_IMPORT_SERVER_FOLD'	=> 'Folder empty or no readable files to process. Please take a look at the log (Settings -> Show Log) for further details.',
            'UPLOAD_IMPORT_SERVER_INSTR'=> 'This action will import all photos, folders and sub-folders which are located in the following directory. The <b>original files will be deleted</b> after the import when possible.',
            'UPLOAD_ABSOLUTE_PATH'		=> 'Absolute path to directory',
            'UPLOAD_IMPORT_SERVER_EMPT'	=> 'Could not start import because the folder was empty!'
        );

        return $locale;
    }
}
