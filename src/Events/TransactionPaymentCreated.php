<?php

namespace Sebdesign\VivaPayments\Events;

use Sebdesign\VivaPayments\Enums\TransactionStatus;
use Sebdesign\VivaPayments\Enums\TransactionType;

/** @see https://developer.vivawallet.com/webhooks-for-payments/transaction-payment-created/ */
class TransactionPaymentCreated
{
    public function __construct(
        public readonly bool $Moto,
        public readonly string $Email,
        public readonly string $Phone,
        public readonly string $BankId,
        public readonly bool $Systemic,
        public readonly bool $Switching,
        public readonly ?string $ParentId,
        public readonly float $Amount,
        public readonly string $ChannelId,
        public readonly int $TerminalId,
        public readonly string $MerchantId,
        public readonly string $OrderCode,
        public readonly ?string $ProductId,
        public readonly TransactionStatus $StatusId,
        public readonly string $FullName,
        public readonly ?string $ResellerId,
        public readonly string $InsDate,
        public readonly float $TotalFee,
        public readonly string $CardUniqueReference,
        public readonly string $CardToken,
        public readonly string $CardNumber,
        public readonly float $TipAmount,
        public readonly string $SourceCode,
        public readonly string $SourceName,
        public readonly ?float $Latitude,
        public readonly ?float $Longitude,
        public readonly string $CompanyName,
        public readonly string $TransactionId,
        public readonly string $CompanyTitle,
        public readonly string $PanEntryMode,
        public readonly int $ReferenceNumber,
        public readonly ?string $ResponseCode,
        public readonly string $CurrencyCode,
        public readonly string $OrderCulture,
        public readonly ?string $MerchantTrns,
        public readonly string $CustomerTrns,
        public readonly bool $IsManualRefund,
        public readonly ?string $TargetPersonId,
        public readonly ?string $TargetWalletId,
        public readonly bool $LoyaltyTriggered,
        public readonly TransactionType $TransactionTypeId,
        public readonly int $TotalInstallments,
        public readonly ?string $CardCountryCode,
        public readonly ?string $CardIssuingBank,
        public readonly int $RedeemedAmount,
        public readonly ?int $ClearanceDate,
        public readonly ?int $CurrentInstallment,
        /** @var string[] */
        public readonly array $Tags,
        public readonly ?string $BillId,
        public readonly ?string $ResellerSourceCode,
        public readonly ?string $ResellerSourceName,
        public readonly ?string $ResellerCompanyName,
        public readonly ?string $ResellerSourceAddress,
        public readonly string $CardExpirationDate,
        public readonly ?string $RetrievalReferenceNumber,
        /** @var string[] */
        public readonly array $AssignedMerchantUsers,
        /** @var string[] */
        public readonly array $AssignedResellerUsers,
        public readonly int $CardTypeId,
        public readonly ?int $DigitalWalletId,
        public readonly ?string $ResponseEventId,
        public readonly ?string $ElectronicCommerceIndicator,
    ) {
    }

    /** @phpstan-param  TransactionPaymentCreatedArray  $attributes */
    public static function create(array $attributes): self
    {
        return new self(...[
            ...$attributes,
            'StatusId' => TransactionStatus::from($attributes['StatusId']),
            'TransactionTypeId' => TransactionType::from($attributes['TransactionTypeId']),
        ]);
    }
}
