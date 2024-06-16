<?php

	namespace App\Enums;

	enum CompanyTypeEnum: string
	{
        case PRIVATE_COMPANY = 'private-company';
        case NONE_PROFIT = 'none-profit';

        public function label(): string
        {
            return match ($this) {
                self::PRIVATE_COMPANY => 'Private Company',
                self::NONE_PROFIT   => 'None Profit'
            };
        }

        public function key(): string
        {
            return match ($this) {
                self::PRIVATE_COMPANY => 'private-company',
                self::NONE_PROFIT   => 'none-profit'
            };
        }

	}
