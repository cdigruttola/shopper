<?php

declare(strict_types=1);

return [

    'forms' => [
        'label' => [
            'email' => 'Adresse e-mail',
            'password' => 'Mot de passe',
            'new_password' => 'Nouveau mot de passe',
            'confirm_password' => 'Confirmer Mot de passe',
            'current_password' => 'Mot de passe actuel',
            'remember' => 'Se souvenir de moi',
            'change' => 'Changer',
            'optional' => 'Optionnel',
            'description' => 'Description',
            'title' => 'Titre',
            'confirm' => 'Confirmer',
            'first_name' => 'Prénom',
            'last_name' => 'Nom',
            'full_name' => 'Nom complet',
            'phone_number' => 'Numéro de téléphone',
            'name' => 'Nom',
            'slug' => 'Slug',
            'website' => 'Site web',
            'url' => 'Url',
            'created_at' => 'Créé à',
            'updated_at' => 'Mis à jour le',
            'published_at' => 'Publié le',
            'registered_at' => 'Inscrit le',
            'visibility' => 'Visibilité',
            'image_preview' => 'Aperçu de l\'image',
            'any' => 'Quelconque',
            'no' => 'Non',
            'yes' => 'Oui',
            'type' => 'Type',
            'value' => 'Valeur',
            'browse' => 'Parcourir',
            'sort_by' => 'Trier par',
            'subscribed' => 'Abonné',
            'not_subscribed' => 'Pas Abonné',
            'email_subscription' => 'Abonnement par e-mail',
            'email_verified' => 'Email vérifié',
            'company_name' => 'Nom de l\'entreprise',
            'street_address' => 'Adresse de la rue',
            'street_address_plus' => 'Appartement, suite, etc.',
            'country' => 'Pays',
            'city' => 'Ville',
            'postal_code' => 'Code Postal',
            'photo' => 'Photo',
            'birth_date' => 'Date de naissance',
            'gender' => 'Sexe',
            'status' => 'Status',
            'active' => 'Actif',
            'inactive' => 'Inactif',
            'code' => 'Code',
            'visible' => 'Visible',
            'invisible' => 'Invisible',
            'search' => 'Recherche',
            'price' => 'Prix',
            'price_amount' => 'Montant du prix',
            'compare_price' => 'Comparer au prix',
            'cost_per_item' => 'Coût par pièce',
            'sku' => 'SKU (Stock Keeping Unit)',
            'barcode' => 'Barcode (ISBN, UPC, GTIN, etc.)',
            'safety_stock' => 'Stock de sécurité',
            'width_unit' => 'Unité de largeur',
            'height_unit' => 'Unité de hauteur',
            'weight_unit' => 'Unité de poids',
            'volume_unit' => 'Unité de volume',
            'height' => 'Hauteur',
            'width' => 'Largeur',
            'volume' => 'Volume',
            'weight' => 'Poids',
            'availability' => 'Disponibilité',
            'brand' => 'Marque',
            'friendly_url' => 'Lien personnalisable',
            'quantity' => 'Quantité',
            'stock_number_value' => 'Valeur du numéro de stock',
            'store_name' => 'Nom du magasin',
            'legal_name' => 'Nom légale de l\'entreprise',
            'logo' => 'Logo',
            'cover_photo' => 'Photo de couverture',
            'about' => 'A propos',
            'currency' => 'Devise',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'public_key' => 'Clé Publique',
            'secret_key' => 'Clé Secrète',
            'tax' => 'Taxe',
            'comment' => 'Commentaire',
            'parent' => 'Parent',
            'provider_logo' => 'Logo du fournisseur',
            'payment_method' => 'Méthode de paiement custom',
            'payment_doc' => 'Documentation du site de paiement',
            'payment_instruction' => 'Instructions du paiement',
            'additional_details' => 'Informations supplémentaire',
            'group_name' => 'Nom du groupe',
            'display_name' => 'Nom d\'affichage',
            'key' => 'Clé',
            'is_searchable' => 'Est Consultable',
            'is_filterable' => 'Est Filtrable',
            'role' => 'Rôle',
            'access' => 'Accès',
        ],

        'placeholder' => [
            'password' => 'Entrer votre mot de passe',
            'email' => 'Entrer votre e-mail',
            'value' => 'votre valeur ici',
            'date' => 'Choisir une date',
            'pick_a_date' => 'Sélectionner une date',
            'select' => 'Sélectionner',
            'select_inventory' => 'Sélectionner un inventaire',
            'choose_currency' => 'Choisir la monnaie',
            'select_country' => 'Choisir un pays',
            'search_by' => 'Rechercher par :label',
            'leave_comment' => 'Laisser des notes pour ce client',
        ],

        'actions' => [
            'activate' => 'Activé',
            'activated' => 'Activer',
            'confirm' => 'Confirmer',
            'cancel' => 'Annuler',
            'clear' => 'Réinitialiser',
            'close' => 'Fermer',
            'delete' => 'Supprimer',
            'deleted' => 'Supprimé',
            'disable' => 'Désactiver',
            'disabled' => 'Désactivé',
            'edit' => 'Éditer',
            'enable' => 'Activer',
            'enabled' => 'Activé',
            'export' => 'Exportez',
            'nevermind' => 'Peu importe',
            'update' => 'Modifier',
            'save' => 'Enregistrer',
            'subscribe' => 'Souscrire',
            'remove' => 'Retirer',
            'remove_all' => 'Tout supprimer',
            'enabled_two_factor' => 'Activer deux facteurs',
            'regenerate' => 'Régénérer les codes de récupération',
            'show_recovery_code' => 'Afficher les codes de récupération',
            'archive' => 'Archiver',
            'archived' => 'Archivé',
            'more_actions' => 'Autres actions',
            'mark_paid' => 'Marqué comme payé',
            'mark_complete' => 'Marqué complète',
            'cancel_order' => 'Annuler',
            'send' => 'Envoyer',
            'logout_session' => 'Déconnecter les autres sessions',
            'approve' => 'Approuver',
            'approved' => 'Approuvé',
            'disapprove' => 'Désapprouver',
            'disapproved' => 'Désapprouvé',
            'create' => 'Créer',
        ],

        'error' => 'Votre soumission contient des erreurs. Veuillez réessayer',

        'validation' => [
            'integer' => 'Cette valeur doit être un nombre entier.',
        ],
    ],

    'sidebar' => [
        'dashboard' => 'Tableau de bord',
        'orders' => 'Commandes',
        'catalog' => 'Catalogue',
        'brands' => 'Marques',
        'categories' => 'Catégories',
        'collections' => 'Collections',
        'customers' => 'Clients',
        'reviews' => 'Avis',
        'discounts' => 'Coupons',
        'shop' => 'Magasin',
        'products' => 'Produits',
    ],

    'account_dropdown' => [
        'sign_in' => 'Connecté avec',
        'add_product' => 'Ajouter produit',
        'personal_account' => 'Compte Personnel',
        'manage_users' => 'Gestions des Admins',
        'settings' => 'Paramètres',
        'sign_out' => 'Déconnexion',
    ],

    'back' => 'Retour',
    'view_site' => 'Voir le site',
    'meta_title' => 'Administration Shopper',
    'soon' => 'Bientôt',

    'status' => [
        'delete' => 'Suppression',
        'success' => 'Succès',
        'updated' => 'Mis à jour',
        'added' => 'Ajout',
    ],

    'tables' => [
        'sku' => 'Sku',
        'price' => 'Prix',
        'current_stock' => 'Stock actuel',
        'stock' => 'Stock',
    ],

];
